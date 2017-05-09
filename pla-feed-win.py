'''
# Scheduled Task (WIN) Setup
Program/Script:
D:\Public\Webautomation\pla-feed\pla-feed-start.bat
Start From:
D:\Public\Webautomation\pla-feed\
'''

import requests
import os
import sys
import urllib
import time
import csv
import pysftp
import argparse
import pandas as pd
import ftplib
import re

# start execution timer
start_time = time.time()

# Control which channel 
parser = argparse.ArgumentParser(description='PLA, DPA, JellyFish - Feed Generator')
parser.add_argument('-d', help='"asf" or "vcf"', required=True)
args = vars(parser.parse_args())

# Set output filename
datetime = time.strftime("%m-%d-%Y-%H-%M-%S")
# xlsx
filenameXLSX = str(args['d']+"-pla-feed.xlsx")
fullpathXLSX = os.path.join("output", filenameXLSX)
# csv
filenameCSV = str(args['d']+"-pla-feed.csv")
fullpathCSV = os.path.join("output", filenameCSV)
# Jellyfish RSS/XML File
filenameXML = str(args['d'].upper()+"_doubleclick.xml")
fullpathXML = os.path.join("output", filenameXML)
# Bing CSV Filename
filenameBingCSV = str(args['d']+"-bing-pla-feed.csv")
fullpathBingCSV = os.path.join("output", filenameBingCSV)
# temp filename
#temp = "output\\temp-csv.csv" #windows
temp = "output/temp-csv.csv"

plaFeed = "https://app.salsify.com/api/channels/54938/runs/latest?access_token=2618a717246c8a24538dd82f312f0ee406e57f928185437d8f26c377f54feb3b"

def fileSize(file):
	statinfo = os.stat(file)
	return "{:,} bytes".format(statinfo.st_size)

def tab(num):
	if num == 1:
		return "\t"
	elif num == 2:
		return "\t\t"
	elif num == 3:
		return "\t\t\t"	
	elif num == 4:
		return "\t\t\t\t"				

def download_excel():
	salsifyLatestRun = r.json()
	productExportUrl = salsifyLatestRun['product_export_url']
	downloadFile = urllib.URLopener()
	downloadFile.retrieve(productExportUrl, fullpathXLSX)

def csv_from_excel():
	data_xls = pd.read_excel(fullpathXLSX, 'Sheet1')
	data_xls.to_csv(fullpathCSV, encoding='utf-8', index=False)	
	reader = csv.reader(open(fullpathCSV, 'rb'))
	writer = csv.writer(open(temp,'wb'))
	if args['d'] == 'asf':
		for row in reader:
			# product_type optimizations
			# contains x 
			outdoor = re.sub('^.*outdoor.*$', 'Outdoor Furniture > General-normalized', row[13], flags=re.IGNORECASE)
			accCabWinePantryBarCabApothCab = re.sub('^.*accent cabinet.*$|^.*wine cabinet.*$|^.*pantry.*$|^.*bar cabinet.*$|^.*apothecary cabinet.*$|^.*accent chest.*$|^.*magazine cabinet.*$|^.*cabinet with display hutch.*$|^.*hall chest.*$','Accents > Cabinets-normalized', outdoor, flags=re.IGNORECASE)	
			jewelryArmoire = re.sub('^.*jewelry armoire.*$', 'Accents > Jewelry Armoires-normalized', accCabWinePantryBarCabApothCab, flags=re.IGNORECASE)	
			chandelier = re.sub('^.*chandelier.*$', 'Accents > Lighting > Chandeliers-normalized', jewelryArmoire, flags=re.IGNORECASE)
			rugs = re.sub('^.*rugs.*$', 'Accents > Rugs-normalized', chandelier, flags=re.IGNORECASE)
			wallArt = re.sub('^.*wall art.*$', 'Accents > Wall Art-normalized', rugs, flags=re.IGNORECASE)
			armoiresWardrobes = re.sub('^.*armoires\/wardrobes.*$', 'Bedroom > Armoires & Wardrobes-normalized', wallArt, flags=re.IGNORECASE)

			# exclude 'loft bed' match to 'bunk bed' or 'bunkbed' 
			bunkBed = armoiresWardrobes
			if bool(re.search('^.*loft bed.*$', bunkBed)) is False:
				bunkBed = re.sub('^.*bunkbed.*$|^.*bunk bed.*$', 'Bedroom > Beds > Bunk Beds-normalized', bunkBed, flags=re.IGNORECASE)

			loftBed = re.sub('(^.*loft bed.*$)', 'Bedroom > Beds > Loft Beds-normalized', bunkBed, flags=re.IGNORECASE)
			daybed = re.sub('^.*daybed.*$', 'Bedroom > Beds > Daybeds-normalized', loftBed, flags=re.IGNORECASE)
			dresser = re.sub('^.*dresser.*$', 'Bedroom > Dressers-normalized', daybed, flags=re.IGNORECASE)
			headboards = re.sub('^.*headboard.*$', 'Bedroom > Headboards-normalized', dresser, flags=re.IGNORECASE)
			nightstand = re.sub('^.*nightstand.*$', 'Bedroom > Nightstands-normalized', headboards, flags=re.IGNORECASE)
			vanity = re.sub('^.*vanity.*$', 'Bedroom > Vanities-normalized', nightstand, flags=re.IGNORECASE)
			curio = re.sub('^.*curio.*$', 'Dining Room > Curios-normalized', vanity, flags=re.IGNORECASE)
			kitchenIslandsCarts = re.sub('^.*Kitchen Islands\/Carts.*$', 'Dining Room > Kitchen Islands & Carts-normalized', curio, flags=re.IGNORECASE)
			diningPackages = re.sub('^.*Dining Packages.*$', 'Dining Room > Sets, Collections, Packages-normalized', kitchenIslandsCarts, flags=re.IGNORECASE)
			execOfficeChairDeskChair = re.sub('^.*executive chair.*$|^.*office chair.*$|^.*desk chair.*$|^.*office arm chair.*$', 'Home Office > Chairs-normalized', diningPackages, flags=re.IGNORECASE)
			fileCabinet = re.sub('^.*file cabinet.*$', 'Home Office > File Cabinets-normalized', execOfficeChairDeskChair, flags=re.IGNORECASE)			
			tvStands = re.sub('^.*tv stand.*$|^.*media credenza.*$|^.*entertainment furniture.*$', 'Living Room > TV Stands-normalized', fileCabinet, flags=re.IGNORECASE)
			livingRoomPackages = re.sub('^.*living room packages.*$', 'Living Room > Sets, Collections, Packages-normalized', tvStands, flags=re.IGNORECASE)			
			adjustableFoundation = re.sub('^.*adjustable foundation.*$', 'Mattress > Mattress Foundations-normalized', livingRoomPackages, flags=re.IGNORECASE)
			mattressProtector = re.sub('^.*mattress protector.*$|^.*protector set.*$', 'Mattress > Mattress Protectors-normalized', adjustableFoundation, flags=re.IGNORECASE)			
			fullMattressSet = re.sub('^.*full mattress set.*$', 'Mattress > Mattress Sets > Full Mattress Sets-normalized', mattressProtector, flags=re.IGNORECASE)
			kingMattressSet = re.sub('^.*king mattress set.*$', 'Mattress > Mattress Sets > King Mattress Sets-normalized', fullMattressSet, flags=re.IGNORECASE)
			queenMattressSet = re.sub('^.*queen mattress set.*$', 'Mattress > Mattress Sets > Queen Mattress Sets-normalized', kingMattressSet, flags=re.IGNORECASE)	
			twinMattressSet = re.sub('^.*twin mattress set.*$', 'Mattress > Mattress Sets > Twin Mattress Sets-normalized', queenMattressSet, flags=re.IGNORECASE)	
			
			# contains x
			# AND does NOT 
			# contain y	

			# match variations of 'table' exclude 'packages' and 'office'
			tablesExclPackagesExclOffice = twinMattressSet			
			if bool(re.search('^.*Dining Packages.*$', tablesExclPackagesExclOffice)) is False:
				if bool(re.search('^.*Office.*$', tablesExclPackagesExclOffice)) is False:
					if bool(re.search('^.*outdoor.*$', tablesExclPackagesExclOffice)) is False:
						tablesExclPackagesExclOffice = re.sub('^.*dining.room.*(?=tables).*$', 'Dining Room > Tables-normalized', tablesExclPackagesExclOffice, flags=re.IGNORECASE)		

			# match 'desk' or 'workstation', NOT 'bed' or 'vanity' or 'lamp'
			deskWorkstationExclBedVanityLamp = tablesExclPackagesExclOffice
			if bool(re.search('^.*bed.*$', deskWorkstationExclBedVanityLamp)) is False:
				if bool(re.search('^.*vanity.*$', deskWorkstationExclBedVanityLamp)) is False:
					if bool(re.search('^.*lamp.*$', deskWorkstationExclBedVanityLamp)) is False:
						deskWorkstationExclBedVanityLamp = re.sub('^.*desk.*$|^.*workstation.*$','Home Office > Desks-normalized', deskWorkstationExclBedVanityLamp, flags=re.IGNORECASE)

			# match 'buffets/sideboards', NOT 'bedroon' or 'desk'
			buffetsSideboardExclBedroomDesk = deskWorkstationExclBedVanityLamp
			if bool(re.search('^.*bedroom.*$', buffetsSideboardExclBedroomDesk)) is False:
				if bool(re.search('^.*desk.*$', buffetsSideboardExclBedroomDesk)) is False:
					buffetsSideboardExclBedroomDesk = re.sub('^.*buffets\/sideboards.*$', 'Dining Room > Buffets & Sideboards-normalized', buffetsSideboardExclBedroomDesk, flags=re.IGNORECASE)

			# match 'side chair' or 'dining chair', NOT 'accent'
			sideDiningChairExclAccent = buffetsSideboardExclBedroomDesk
			if bool(re.search('^.*accent.*$', sideDiningChairExclAccent)) is False:
				if bool(re.search('^.*arm.*$', sideDiningChairExclAccent)) is False:
					sideDiningChairExclAccent = re.sub('^.*side chair.*$|^.*dining chair.*$|^.*dining room.*(?=chairs).*$|^.*dining benches.*$', 'Dining Room > Chairs-normalized', sideDiningChairExclAccent, flags=re.IGNORECASE)

			# match 'settees/benches', NOT 'dining room'
			benchesSettees = sideDiningChairExclAccent
			if bool(re.search('^.*dining room.*$', benchesSettees)) is False:
				benchesSettees = re.sub('^.*Settees\/Benches.*$', 'Accents > Benches-normalized', benchesSettees, flags=re.IGNORECASE)				

			# match 'bedroom packages', NOT 'vanity'
			bedroomPackagesExclVanity = benchesSettees
			if bool(re.search('^.*vanity.*$', bedroomPackagesExclVanity)) is False:
				bedroomPackagesExclVanity = re.sub('^.*bedroom packages.*$', 'Bedroom > Sets, Collections, Packages-normalized', bedroomPackagesExclVanity, flags=re.IGNORECASE)

			# match 'accent pillow', NOT 'euro sham'
			accentPillowExclSham = bedroomPackagesExclVanity
			if bool(re.search('^.*euro sham.*$', accentPillowExclSham)) is False:
				if bool(re.search('^.*sham.*$', accentPillowExclSham)) is False:
					accentPillowExclSham = re.sub('^.*accent pillow.*$', 'Accents > Pillows-normalized', accentPillowExclSham, flags=re.IGNORECASE)

			# match 'sectional', NOT 'package' or 'outdoor'
			sectionalExclPkgOutdoor = accentPillowExclSham
			if bool(re.search('.*package.*$', sectionalExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor.*$', sectionalExclPkgOutdoor)) is False:				
					sectionalExclPkgOutdoor = re.sub('^.*sectional.*$', 'Living Room > Sectionals-normalized', sectionalExclPkgOutdoor, flags=re.IGNORECASE)	

			# match 'sleeper sofa' or 'sofa bed' or 'futon', NOT 'package' or 'bunkbed' or 'bunk bed'
			sleeperSofaSofaBedFutonExclPkgBnkBd = sectionalExclPkgOutdoor
			if bool(re.search('^.*package.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:
				if bool(re.search('^.*bunkbed.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:
					if bool(re.search('^.*bunk bed.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:					
						sleeperSofaSofaBedFutonExclPkgBnkBd = re.sub('^.*sleepers.*$', 'Living Room > Sleepers-normalized', sleeperSofaSofaBedFutonExclPkgBnkBd, flags=re.IGNORECASE)	

			# match 'ottoman', NOT 'sectional' or 'chair' or 'outdoor'
			ottomanExclSectChairOutdoor = sleeperSofaSofaBedFutonExclPkgBnkBd
			if bool(re.search('^.*sectional.*$', ottomanExclSectChairOutdoor)) is False:
				if bool(re.search('^.*chair.*$', ottomanExclSectChairOutdoor)) is False:
					if bool(re.search('^.*outdoor.*$', ottomanExclSectChairOutdoor)) is False:
						ottomanExclSectChairOutdoor = re.sub('^.*ottoman.*$', 'Accents > Ottomans-normalized', ottomanExclSectChairOutdoor, flags=re.IGNORECASE)			

			# match 'coffee table' or 'cocktail table', NOT 'package'
			coffeeTableCocktailTableExclPkg = ottomanExclSectChairOutdoor
			if bool(re.search('^.*package.*$', coffeeTableCocktailTableExclPkg)) is False:
				if bool(re.search('^.*ottoman.*$', coffeeTableCocktailTableExclPkg)) is False:
					coffeeTableCocktailTableExclPkg = re.sub('^.*coffee table.*$|^.*cocktail table.*$', 'Living Room > Tables > Coffee Tables-normalized', coffeeTableCocktailTableExclPkg, flags=re.IGNORECASE)

			# match 'recliners/rockers' or 'lift', NOT 'package' or 'outdoor' or 'cocktail'
			reclinersRockersLiftExclPkgOutdoor = coffeeTableCocktailTableExclPkg
			if bool(re.search('^.*package.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor\.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
					if bool(re.search('^.*cocktail.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
						reclinersRockersLiftExclPkgOutdoor = re.sub('^.*recliners\/rockers.*$|^.*recliner.*$', 'Living Room > Recliners-normalized', reclinersRockersLiftExclPkgOutdoor, flags=re.IGNORECASE)

			# match 'end table'	or 'side table' or chairside table, NOT 'package'
			endTbleSdeTbleChrsdeTbleExclPkg = reclinersRockersLiftExclPkgOutdoor
			if bool(re.search('^.*package.*$', endTbleSdeTbleChrsdeTbleExclPkg)) is False:
				endTbleSdeTbleChrsdeTbleExclPkg = re.sub('^.*end table.*$|^.*side table.*$|^.*chairside table.*$|^.*lamp table.*$', 'Living Room > Tables > End Tables-normalized', endTbleSdeTbleChrsdeTbleExclPkg, flags=re.IGNORECASE)

			# match 'sofa table' or 'console table', NOT 'package'
			sofaTableConsoleTableExclPkg = endTbleSdeTbleChrsdeTbleExclPkg
			if bool(re.search('^.*package.*$', sofaTableConsoleTableExclPkg)) is False:
				sofaTableConsoleTableExclPkg = re.sub('^.*sofa table.*$|^.*console table.*$|^.*hall console.*$', 'Living Room > Tables > Console Tables-normalized', sofaTableConsoleTableExclPkg, flags=re.IGNORECASE)

			lamp = re.sub('^.*lamp.*$', 'Accents > Lighting > Lamps-normalized', sofaTableConsoleTableExclPkg, flags=re.IGNORECASE)

			# match 'full mattress', NOT 'protector' or 'set' or 'bunkie board'
			fullMattressExclProtectorSetBunkieBoard = lamp
			if bool(re.search('^.*protector.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=full.mattress.sets).*$', fullMattressExclProtectorSetBunkieBoard)) is False:
							fullMattressExclProtectorSetBunkieBoard = re.sub('^.*full mattresses.*$', 'Mattress > Full Mattresses-normalized', fullMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)			

			# match 'king mattress', NOT 'protector' or 'set' or 'bunkie board'
			kingMattressExclProtectorSetBunkieBoard = fullMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*protector.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=king.mattress.sets).*$', kingMattressExclProtectorSetBunkieBoard)) is False:
							kingMattressExclProtectorSetBunkieBoard = re.sub('^.*king mattresses.*$', 'Mattress > King Mattresses-normalized', kingMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)

			# match 'accent table', NOT 'console' or 'chest' or 'sofa'
			accentTableExclConsoleChestSofa = kingMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*console.*$', accentTableExclConsoleChestSofa)) is False:
				if bool(re.search('^.*chest.*$', accentTableExclConsoleChestSofa)) is False:
					if bool(re.search('^.*sofa.*$', accentTableExclConsoleChestSofa)) is False:
						if bool(re.search('^.*sliding door.*$', accentTableExclConsoleChestSofa)) is False:
							accentTableExclConsoleChestSofa = re.sub('^.*accent table.*$|^.*accent.pieces.*(?=tables).*$', 'Accents > Tables-normalized', accentTableExclConsoleChestSofa, flags=re.IGNORECASE)

			# match 'stools', NOT 'dining packages' or 'office' or 'accent'
			stoolsExclDiningPackagesOfficeAccent = accentTableExclConsoleChestSofa
			if bool(re.search('^.*dining packages.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
				if bool(re.search('^.*office.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
					if bool(re.search('^.*accent.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
						stoolsExclDiningPackagesOfficeAccent = re.sub('^.*stools.*$|^.*counter-height.*$', 'Dining Room > Stools > Barstools-normalized', stoolsExclDiningPackagesOfficeAccent, flags=re.IGNORECASE)

			# match 'full bed' or 'full bookcase bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			fullBedExclBunkLoftDaybedPackageBeddingLinens = stoolsExclDiningPackagesOfficeAccent
			if bool(re.search('^.*bunk.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
								if bool(re.search('^.*linens.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									fullBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*full bed.*$|^.*full bookcase bed.*$|^.*full metal bed.*$|^.*full corner bed.*$', 'Bedroom > Beds > Full Beds-normalized', fullBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'king bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			kingBedExclBunkLoftDaybedPackageBeddingLinens = fullBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
								if bool(re.search('^.*mattress.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									if bool(re.search('^.*accent pieces.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
										kingBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=king).*$', 'Bedroom > Beds > King Beds-normalized', kingBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'queen bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			queenBedExclBunkLoftDaybedPackageBeddingLinens = kingBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
								if bool(re.search('^.*mattress.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:								
									if bool(re.search('^.*accent pieces.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
										queenBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=queen).*$|^.*kids furniture.*(?=beds).*(?=queen).*$', 'Bedroom > Beds > Queen Beds-normalized', queenBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)			

			# match 'twin bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			twinBedExclBunkLoftDaybedPackageBeddingLinens = queenBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
								if bool(re.search('^.*accent pieces.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									if bool(re.search('^.*mattress.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:									
										twinBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=twin).*$|^.*kids furniture.*(?=beds).*(?=twin).*$', 'Bedroom > Beds > Twin Beds-normalized', twinBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'queen mattress', NOT 'protector' or 'set' or 'bunkie board'
			queenMattressExclProtectorSetBunkieBoard = twinBedExclBunkLoftDaybedPackageBeddingLinens
			if bool(re.search('^.*protector.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=queen.mattress.sets).*$', queenMattressExclProtectorSetBunkieBoard)) is False:	
							queenMattressExclProtectorSetBunkieBoard = re.sub('^.*queen mattresses.*$', 'Mattress > Queen Mattresses-normalized', queenMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)

			# match 'twin mattress', NOT 'protector' or 'set' or 'bunkie board'
			twinMattressExclProtectorSetBunkieBoard = queenMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*protector.*$', twinMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', twinMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', twinMattressExclProtectorSetBunkieBoard)) is False:	
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=twin.mattress.sets).*$', twinMattressExclProtectorSetBunkieBoard)) is False:
							twinMattressExclProtectorSetBunkieBoard = re.sub('^.*twin mattresses.*$|^.*twin xl mattress.*$', 'Mattress > Twin Mattresses-normalized', twinMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)									

			# match 'bookcase'. NOT 'daybeds' or 'beds'
			bookcaseExclDaybedsBeds = twinMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*daybeds.*$', bookcaseExclDaybedsBeds)) is False:
				if bool(re.search('^.*bed.*$', bookcaseExclDaybedsBeds)) is False:
					if bool(re.search('^.*bookcase bed.*$', bookcaseExclDaybedsBeds)) is False:		
						if bool(re.search('^.*bedroom.*$', bookcaseExclDaybedsBeds)) is False:	
							bookcaseExclDaybedsBeds = re.sub('^.*bookcases.*$', 'Accents > Bookcases-normalized', bookcaseExclDaybedsBeds, flags=re.IGNORECASE)


			# match 'chest', NOT 'package' or 'accent' or 'bedside' or 'tv stand'
			chestExclAccentBedsideTvStand = bookcaseExclDaybedsBeds
			if bool(re.search('^.*accent.*$', chestExclAccentBedsideTvStand)) is False:
				if bool(re.search('^.*bedside.*$', chestExclAccentBedsideTvStand)) is False:
					if bool(re.search('^.*tv stand.*$', chestExclAccentBedsideTvStand)) is False:
						if bool(re.search('^.*accent chest.*$', chestExclAccentBedsideTvStand)) is False:						
							chestExclAccentBedsideTvStand = re.sub('^.*chest.*$|^.*chest & mirror.*$', 'Bedroom > Chests-normalized', chestExclAccentBedsideTvStand, flags=re.IGNORECASE)

			# match 'mirror', NOT 'bedroom packages' or 'dresser/mirror sets' or 'dining room' or 'chest'
			mirrorExclBrPkgDresserMirrorSetsDngRmChest = chestExclAccentBedsideTvStand
			if bool(re.search('^.*bedroom packages.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
				if bool(re.search('^.*dresser\/mirror sets.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
					if bool(re.search('^.*dining room.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
						if bool(re.search('^.*chest.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
							if bool(re.search('^.*bedroom > chests.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:							
								mirrorExclBrPkgDresserMirrorSetsDngRmChest = re.sub('^.*mirror.*$', 'Accents > Mirrors-normalized', mirrorExclBrPkgDresserMirrorSetsDngRmChest, flags=re.IGNORECASE)

			# match 'loveseat', NOT 'package' or 'outdoor'
			loveseatExclPkgOutdoor = mirrorExclBrPkgDresserMirrorSetsDngRmChest
			if bool(re.search('^.*package.*$', loveseatExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor.*$', loveseatExclPkgOutdoor)) is False:
					loveseatExclPkgOutdoor = re.sub('^.*loveseat.*$', 'Living Room > Loveseats-normalized', loveseatExclPkgOutdoor, flags=re.IGNORECASE)

			# match 'chaise', NOT 'sectional' or 'sofa' or 'futon' or 'outdoor' or 'package'
			chaiseExclSectionSofaFutonOutdoorPackage = loveseatExclPkgOutdoor
			if bool(re.search('^.*sectional.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
				if bool(re.search('^.*sofa.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
					if bool(re.search('^.*futon.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
						if bool(re.search('^.*outdoor.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
							if bool(re.search('^.*package.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
								chaiseExclSectionSofaFutonOutdoorPackage = re.sub('^.*chaise.*$', 'Living Room > Chaises-normalized', chaiseExclSectionSofaFutonOutdoorPackage, flags=re.IGNORECASE)

			# match 'sofa', NOT 'package' or 'loveseat' or 'sectional' or 'table' or 'sleeper' or futon or 'apartment' or 'outdoor'
			sofaExclPkgLveseatSectTbleSlprFutonAptOutdr = chaiseExclSectionSofaFutonOutdoorPackage
			if bool(re.search('^.*package.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
				if bool(re.search('^.*loveseat.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
					if bool(re.search('^.*sectional.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
						if bool(re.search('^.*table.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
							if bool(re.search('^.*sleeper.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
								if bool(re.search('^.*futon.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
									if bool(re.search('^.*apartment.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
										if bool(re.search('^.*outdoor.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
											if bool(re.search('^.*sleepers.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:	
												if bool(re.search('^.*living room.*(?=sleeper.sofas).*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:	
													if bool(re.search('^.*table.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:																																		
														sofaExclPkgLveseatSectTbleSlprFutonAptOutdr = re.sub('^.*sofa.*$', 'Living Room > Sofas-normalized', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr, flags=re.IGNORECASE)
		
			# match 'chair', NOT 'table' or 'dining' or 'office' or 'desk' or 'outdoor' or 'package' or 'recliner' or 'lift' or 'chaise'
			chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise = sofaExclPkgLveseatSectTbleSlprFutonAptOutdr
			if bool(re.search('^.*table.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
				if bool(re.search('^.*dining.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
					if bool(re.search('^.*office.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
						if bool(re.search('^.*desk.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
							if bool(re.search('^.*outdoor.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
								if bool(re.search('^.*package.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
									if bool(re.search('^.*recliner.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
										if bool(re.search('^.*lift.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
											if bool(re.search('^.*chaise.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
												if bool(re.search('^.*benches.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
													if bool(re.search('^.*home office.*(?=chairs).*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
														if bool(re.search('^.*dining chair.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
															if bool(re.search('^.*side chair.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:		
																if bool(re.search('^.*accent.*(?=benches).*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:																																																	
																	chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise = re.sub('^.*upholstery.*(?=chairs).*$|^.*leather.*(?=chairs).*$|^.*accent pieces.*(?=chairs).*$|^.*chairs.*(?=swivel).*(?=chair).*$', 'Living Room > Chairs-normalized', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise, flags=re.IGNORECASE)
			# normalize 
			removeNormalization = chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise.replace('-normalized', '')	
			productTypeRules = removeNormalization.replace("  >  "," > ")
			hadonLargePillowSham = row[3].replace('product/item//hadon-large-bolster-pillow-&-sham-ivory/1964840', 'product/item/hadon-large-bolster-pillow-sham-ivory/1987529/1964840')
			pdpLink = row[3].replace('item//', 'item/')

			writer.writerow([row[0],row[1].title(),row[2],pdpLink.replace("valuecity","americansignature"),row[4],row[5],row[6],row[7].replace("valuecity","americansignature"), row[8],
							row[9].replace("ASI-BRAND", "American Signature"),row[10],row[11],row[12],productTypeRules,row[14],row[15],row[16],row[17],row[18],row[19],row[20],row[21],
							row[22],row[23]])

	else:
		for row in reader:
			# product_type optimizations
			# contains x 
			outdoor = re.sub('^.*outdoor.*$', 'Outdoor Furniture > General-normalized', row[13], flags=re.IGNORECASE)
			accCabWinePantryBarCabApothCab = re.sub('^.*accent cabinet.*$|^.*wine cabinet.*$|^.*pantry.*$|^.*bar cabinet.*$|^.*apothecary cabinet.*$|^.*accent chest.*$|^.*magazine cabinet.*$|^.*cabinet with display hutch.*$|^.*hall chest.*$','Accents > Cabinets-normalized', outdoor, flags=re.IGNORECASE)	
			jewelryArmoire = re.sub('^.*jewelry armoire.*$', 'Accents > Jewelry Armoires-normalized', accCabWinePantryBarCabApothCab, flags=re.IGNORECASE)	
			chandelier = re.sub('^.*chandelier.*$', 'Accents > Lighting > Chandeliers-normalized', jewelryArmoire, flags=re.IGNORECASE)
			rugs = re.sub('^.*rugs.*$', 'Accents > Rugs-normalized', chandelier, flags=re.IGNORECASE)
			wallArt = re.sub('^.*wall art.*$', 'Accents > Wall Art-normalized', rugs, flags=re.IGNORECASE)
			armoiresWardrobes = re.sub('^.*armoires\/wardrobes.*$', 'Bedroom > Armoires & Wardrobes-normalized', wallArt, flags=re.IGNORECASE)

			# exclude 'loft bed' match to 'bunk bed' or 'bunkbed' 
			bunkBed = armoiresWardrobes
			if bool(re.search('^.*loft bed.*$', bunkBed)) is False:
				bunkBed = re.sub('^.*bunkbed.*$|^.*bunk bed.*$', 'Bedroom > Beds > Bunk Beds-normalized', bunkBed, flags=re.IGNORECASE)

			loftBed = re.sub('(^.*loft bed.*$)', 'Bedroom > Beds > Loft Beds-normalized', bunkBed, flags=re.IGNORECASE)
			daybed = re.sub('^.*daybed.*$', 'Bedroom > Beds > Daybeds-normalized', loftBed, flags=re.IGNORECASE)
			dresser = re.sub('^.*dresser.*$', 'Bedroom > Dressers-normalized', daybed, flags=re.IGNORECASE)
			headboards = re.sub('^.*headboard.*$', 'Bedroom > Headboards-normalized', dresser, flags=re.IGNORECASE)
			nightstand = re.sub('^.*nightstand.*$', 'Bedroom > Nightstands-normalized', headboards, flags=re.IGNORECASE)
			vanity = re.sub('^.*vanity.*$', 'Bedroom > Vanities-normalized', nightstand, flags=re.IGNORECASE)
			curio = re.sub('^.*curio.*$', 'Dining Room > Curios-normalized', vanity, flags=re.IGNORECASE)
			kitchenIslandsCarts = re.sub('^.*Kitchen Islands\/Carts.*$', 'Dining Room > Kitchen Islands & Carts-normalized', curio, flags=re.IGNORECASE)
			diningPackages = re.sub('^.*Dining Packages.*$', 'Dining Room > Sets, Collections, Packages-normalized', kitchenIslandsCarts, flags=re.IGNORECASE)
			execOfficeChairDeskChair = re.sub('^.*executive chair.*$|^.*office chair.*$|^.*desk chair.*$|^.*office arm chair.*$', 'Home Office > Chairs-normalized', diningPackages, flags=re.IGNORECASE)
			fileCabinet = re.sub('^.*file cabinet.*$', 'Home Office > File Cabinets-normalized', execOfficeChairDeskChair, flags=re.IGNORECASE)			
			tvStands = re.sub('^.*tv stand.*$|^.*media credenza.*$|^.*entertainment furniture.*$', 'Living Room > TV Stands-normalized', fileCabinet, flags=re.IGNORECASE)
			livingRoomPackages = re.sub('^.*living room packages.*$', 'Living Room > Sets, Collections, Packages-normalized', tvStands, flags=re.IGNORECASE)			
			adjustableFoundation = re.sub('^.*adjustable foundation.*$', 'Mattress > Mattress Foundations-normalized', livingRoomPackages, flags=re.IGNORECASE)
			mattressProtector = re.sub('^.*mattress protector.*$|^.*protector set.*$', 'Mattress > Mattress Protectors-normalized', adjustableFoundation, flags=re.IGNORECASE)			
			fullMattressSet = re.sub('^.*full mattress set.*$', 'Mattress > Mattress Sets > Full Mattress Sets-normalized', mattressProtector, flags=re.IGNORECASE)
			kingMattressSet = re.sub('^.*king mattress set.*$', 'Mattress > Mattress Sets > King Mattress Sets-normalized', fullMattressSet, flags=re.IGNORECASE)
			queenMattressSet = re.sub('^.*queen mattress set.*$', 'Mattress > Mattress Sets > Queen Mattress Sets-normalized', kingMattressSet, flags=re.IGNORECASE)	
			twinMattressSet = re.sub('^.*twin mattress set.*$', 'Mattress > Mattress Sets > Twin Mattress Sets-normalized', queenMattressSet, flags=re.IGNORECASE)	
			
			# contains x
			# AND does NOT 
			# contain y	

			# match variations of 'table' exclude 'packages' and 'office'
			tablesExclPackagesExclOffice = twinMattressSet			
			if bool(re.search('^.*Dining Packages.*$', tablesExclPackagesExclOffice)) is False:
				if bool(re.search('^.*Office.*$', tablesExclPackagesExclOffice)) is False:
					if bool(re.search('^.*outdoor.*$', tablesExclPackagesExclOffice)) is False:
						tablesExclPackagesExclOffice = re.sub('^.*dining.room.*(?=tables).*$', 'Dining Room > Tables-normalized', tablesExclPackagesExclOffice, flags=re.IGNORECASE)		

			# match 'desk' or 'workstation', NOT 'bed' or 'vanity' or 'lamp'
			deskWorkstationExclBedVanityLamp = tablesExclPackagesExclOffice
			if bool(re.search('^.*bed.*$', deskWorkstationExclBedVanityLamp)) is False:
				if bool(re.search('^.*vanity.*$', deskWorkstationExclBedVanityLamp)) is False:
					if bool(re.search('^.*lamp.*$', deskWorkstationExclBedVanityLamp)) is False:
						deskWorkstationExclBedVanityLamp = re.sub('^.*desk.*$|^.*workstation.*$','Home Office > Desks-normalized', deskWorkstationExclBedVanityLamp, flags=re.IGNORECASE)

			# match 'buffets/sideboards', NOT 'bedroon' or 'desk'
			buffetsSideboardExclBedroomDesk = deskWorkstationExclBedVanityLamp
			if bool(re.search('^.*bedroom.*$', buffetsSideboardExclBedroomDesk)) is False:
				if bool(re.search('^.*desk.*$', buffetsSideboardExclBedroomDesk)) is False:
					buffetsSideboardExclBedroomDesk = re.sub('^.*buffets\/sideboards.*$', 'Dining Room > Buffets & Sideboards-normalized', buffetsSideboardExclBedroomDesk, flags=re.IGNORECASE)

			# match 'side chair' or 'dining chair', NOT 'accent'
			sideDiningChairExclAccent = buffetsSideboardExclBedroomDesk
			if bool(re.search('^.*accent.*$', sideDiningChairExclAccent)) is False:
				if bool(re.search('^.*arm.*$', sideDiningChairExclAccent)) is False:
					sideDiningChairExclAccent = re.sub('^.*side chair.*$|^.*dining chair.*$|^.*dining room.*(?=chairs).*$|^.*dining benches.*$', 'Dining Room > Chairs-normalized', sideDiningChairExclAccent, flags=re.IGNORECASE)

			# match 'settees/benches', NOT 'dining room'
			benchesSettees = sideDiningChairExclAccent
			if bool(re.search('^.*dining room.*$', benchesSettees)) is False:
				benchesSettees = re.sub('^.*Settees\/Benches.*$', 'Accents > Benches-normalized', benchesSettees, flags=re.IGNORECASE)				

			# match 'bedroom packages', NOT 'vanity'
			bedroomPackagesExclVanity = benchesSettees
			if bool(re.search('^.*vanity.*$', bedroomPackagesExclVanity)) is False:
				bedroomPackagesExclVanity = re.sub('^.*bedroom packages.*$', 'Bedroom > Sets, Collections, Packages-normalized', bedroomPackagesExclVanity, flags=re.IGNORECASE)

			# match 'accent pillow', NOT 'euro sham'
			accentPillowExclSham = bedroomPackagesExclVanity
			if bool(re.search('^.*euro sham.*$', accentPillowExclSham)) is False:
				if bool(re.search('^.*sham.*$', accentPillowExclSham)) is False:
					accentPillowExclSham = re.sub('^.*accent pillow.*$', 'Accents > Pillows-normalized', accentPillowExclSham, flags=re.IGNORECASE)

			# match 'sectional', NOT 'package' or 'outdoor'
			sectionalExclPkgOutdoor = accentPillowExclSham
			if bool(re.search('.*package.*$', sectionalExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor.*$', sectionalExclPkgOutdoor)) is False:				
					sectionalExclPkgOutdoor = re.sub('^.*sectional.*$', 'Living Room > Sectionals-normalized', sectionalExclPkgOutdoor, flags=re.IGNORECASE)	

			# match 'sleeper sofa' or 'sofa bed' or 'futon', NOT 'package' or 'bunkbed' or 'bunk bed'
			sleeperSofaSofaBedFutonExclPkgBnkBd = sectionalExclPkgOutdoor
			if bool(re.search('^.*package.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:
				if bool(re.search('^.*bunkbed.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:
					if bool(re.search('^.*bunk bed.*$', sleeperSofaSofaBedFutonExclPkgBnkBd)) is False:					
						sleeperSofaSofaBedFutonExclPkgBnkBd = re.sub('^.*sleepers.*$', 'Living Room > Sleepers-normalized', sleeperSofaSofaBedFutonExclPkgBnkBd, flags=re.IGNORECASE)	

			# match 'ottoman', NOT 'sectional' or 'chair' or 'outdoor'
			ottomanExclSectChairOutdoor = sleeperSofaSofaBedFutonExclPkgBnkBd
			if bool(re.search('^.*sectional.*$', ottomanExclSectChairOutdoor)) is False:
				if bool(re.search('^.*chair.*$', ottomanExclSectChairOutdoor)) is False:
					if bool(re.search('^.*outdoor.*$', ottomanExclSectChairOutdoor)) is False:
						ottomanExclSectChairOutdoor = re.sub('^.*ottoman.*$', 'Accents > Ottomans-normalized', ottomanExclSectChairOutdoor, flags=re.IGNORECASE)			

			# match 'coffee table' or 'cocktail table', NOT 'package'
			coffeeTableCocktailTableExclPkg = ottomanExclSectChairOutdoor
			if bool(re.search('^.*package.*$', coffeeTableCocktailTableExclPkg)) is False:
				if bool(re.search('^.*ottoman.*$', coffeeTableCocktailTableExclPkg)) is False:
					coffeeTableCocktailTableExclPkg = re.sub('^.*coffee table.*$|^.*cocktail table.*$', 'Living Room > Tables > Coffee Tables-normalized', coffeeTableCocktailTableExclPkg, flags=re.IGNORECASE)

			# match 'recliners/rockers' or 'lift', NOT 'package' or 'outdoor' or 'cocktail'
			reclinersRockersLiftExclPkgOutdoor = coffeeTableCocktailTableExclPkg
			if bool(re.search('^.*package.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor\.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
					if bool(re.search('^.*cocktail.*$', reclinersRockersLiftExclPkgOutdoor)) is False:
						reclinersRockersLiftExclPkgOutdoor = re.sub('^.*recliners\/rockers.*$|^.*recliner.*$', 'Living Room > Recliners-normalized', reclinersRockersLiftExclPkgOutdoor, flags=re.IGNORECASE)

			# match 'end table'	or 'side table' or chairside table, NOT 'package'
			endTbleSdeTbleChrsdeTbleExclPkg = reclinersRockersLiftExclPkgOutdoor
			if bool(re.search('^.*package.*$', endTbleSdeTbleChrsdeTbleExclPkg)) is False:
				endTbleSdeTbleChrsdeTbleExclPkg = re.sub('^.*end table.*$|^.*side table.*$|^.*chairside table.*$|^.*lamp table.*$', 'Living Room > Tables > End Tables-normalized', endTbleSdeTbleChrsdeTbleExclPkg, flags=re.IGNORECASE)

			# match 'sofa table' or 'console table', NOT 'package'
			sofaTableConsoleTableExclPkg = endTbleSdeTbleChrsdeTbleExclPkg
			if bool(re.search('^.*package.*$', sofaTableConsoleTableExclPkg)) is False:
				sofaTableConsoleTableExclPkg = re.sub('^.*sofa table.*$|^.*console table.*$|^.*hall console.*$', 'Living Room > Tables > Console Tables-normalized', sofaTableConsoleTableExclPkg, flags=re.IGNORECASE)

			lamp = re.sub('^.*lamp.*$', 'Accents > Lighting > Lamps-normalized', sofaTableConsoleTableExclPkg, flags=re.IGNORECASE)

			# match 'full mattress', NOT 'protector' or 'set' or 'bunkie board'
			fullMattressExclProtectorSetBunkieBoard = lamp
			if bool(re.search('^.*protector.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', fullMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=full.mattress.sets).*$', fullMattressExclProtectorSetBunkieBoard)) is False:
							fullMattressExclProtectorSetBunkieBoard = re.sub('^.*full mattresses.*$', 'Mattress > Full Mattresses-normalized', fullMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)			

			# match 'king mattress', NOT 'protector' or 'set' or 'bunkie board'
			kingMattressExclProtectorSetBunkieBoard = fullMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*protector.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', kingMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=king.mattress.sets).*$', kingMattressExclProtectorSetBunkieBoard)) is False:
							kingMattressExclProtectorSetBunkieBoard = re.sub('^.*king mattresses.*$', 'Mattress > King Mattresses-normalized', kingMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)

			# match 'accent table', NOT 'console' or 'chest' or 'sofa'
			accentTableExclConsoleChestSofa = kingMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*console.*$', accentTableExclConsoleChestSofa)) is False:
				if bool(re.search('^.*chest.*$', accentTableExclConsoleChestSofa)) is False:
					if bool(re.search('^.*sofa.*$', accentTableExclConsoleChestSofa)) is False:
						if bool(re.search('^.*sliding door.*$', accentTableExclConsoleChestSofa)) is False:
							accentTableExclConsoleChestSofa = re.sub('^.*accent table.*$|^.*accent.pieces.*(?=tables).*$', 'Accents > Tables-normalized', accentTableExclConsoleChestSofa, flags=re.IGNORECASE)

			# match 'stools', NOT 'dining packages' or 'office' or 'accent'
			stoolsExclDiningPackagesOfficeAccent = accentTableExclConsoleChestSofa
			if bool(re.search('^.*dining packages.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
				if bool(re.search('^.*office.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
					if bool(re.search('^.*accent.*$', stoolsExclDiningPackagesOfficeAccent)) is False:
						stoolsExclDiningPackagesOfficeAccent = re.sub('^.*stools.*$|^.*counter-height.*$', 'Dining Room > Stools > Barstools-normalized', stoolsExclDiningPackagesOfficeAccent, flags=re.IGNORECASE)

			# match 'full bed' or 'full bookcase bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			fullBedExclBunkLoftDaybedPackageBeddingLinens = stoolsExclDiningPackagesOfficeAccent
			if bool(re.search('^.*bunk.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
								if bool(re.search('^.*linens.*$', fullBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									fullBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*full bed.*$|^.*full bookcase bed.*$|^.*full metal bed.*$|^.*full corner bed.*$', 'Bedroom > Beds > Full Beds-normalized', fullBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'king bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			kingBedExclBunkLoftDaybedPackageBeddingLinens = fullBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
								if bool(re.search('^.*mattress.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									if bool(re.search('^.*accent pieces.*$', kingBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
										kingBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=king).*$', 'Bedroom > Beds > King Beds-normalized', kingBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'queen bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			queenBedExclBunkLoftDaybedPackageBeddingLinens = kingBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
								if bool(re.search('^.*mattress.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:								
									if bool(re.search('^.*accent pieces.*$', queenBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
										queenBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=queen).*$|^.*kids furniture.*(?=beds).*(?=queen).*$', 'Bedroom > Beds > Queen Beds-normalized', queenBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)			

			# match 'twin bed', NOT 'bunk' or 'loft' or 'daybed' or 'package' or 'bedding' or 'linens'
			twinBedExclBunkLoftDaybedPackageBeddingLinens = queenBedExclBunkLoftDaybedPackageBeddingLinens	
			if bool(re.search('^.*bunk.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
				if bool(re.search('^.*loft.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
					if bool(re.search('^.*daybed.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
						if bool(re.search('^.*package.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
							if bool(re.search('^.*bedding.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:	
								if bool(re.search('^.*accent pieces.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:
									if bool(re.search('^.*mattress.*$', twinBedExclBunkLoftDaybedPackageBeddingLinens)) is False:									
										twinBedExclBunkLoftDaybedPackageBeddingLinens = re.sub('^.*bedroom.*(?=beds).*(?=twin).*$|^.*kids furniture.*(?=beds).*(?=twin).*$', 'Bedroom > Beds > Twin Beds-normalized', twinBedExclBunkLoftDaybedPackageBeddingLinens, flags=re.IGNORECASE)

			# match 'queen mattress', NOT 'protector' or 'set' or 'bunkie board'
			queenMattressExclProtectorSetBunkieBoard = twinBedExclBunkLoftDaybedPackageBeddingLinens
			if bool(re.search('^.*protector.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', queenMattressExclProtectorSetBunkieBoard)) is False:
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=queen.mattress.sets).*$', queenMattressExclProtectorSetBunkieBoard)) is False:	
							queenMattressExclProtectorSetBunkieBoard = re.sub('^.*queen mattresses.*$', 'Mattress > Queen Mattresses-normalized', queenMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)

			# match 'twin mattress', NOT 'protector' or 'set' or 'bunkie board'
			twinMattressExclProtectorSetBunkieBoard = queenMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*protector.*$', twinMattressExclProtectorSetBunkieBoard)) is False:
				if bool(re.search('^.*set.*$', twinMattressExclProtectorSetBunkieBoard)) is False:
					if bool(re.search('^.*bunkie board.*$', twinMattressExclProtectorSetBunkieBoard)) is False:	
						if bool(re.search('^.*mattress.*(?=mattress.sets).*(?=twin.mattress.sets).*$', twinMattressExclProtectorSetBunkieBoard)) is False:
							twinMattressExclProtectorSetBunkieBoard = re.sub('^.*twin mattresses.*$|^.*twin xl mattress.*$', 'Mattress > Twin Mattresses-normalized', twinMattressExclProtectorSetBunkieBoard, flags=re.IGNORECASE)									

			# match 'bookcase'. NOT 'daybeds' or 'beds'
			bookcaseExclDaybedsBeds = twinMattressExclProtectorSetBunkieBoard
			if bool(re.search('^.*daybeds.*$', bookcaseExclDaybedsBeds)) is False:
				if bool(re.search('^.*bed.*$', bookcaseExclDaybedsBeds)) is False:
					if bool(re.search('^.*bookcase bed.*$', bookcaseExclDaybedsBeds)) is False:		
						if bool(re.search('^.*bedroom.*$', bookcaseExclDaybedsBeds)) is False:	
							bookcaseExclDaybedsBeds = re.sub('^.*bookcases.*$', 'Accents > Bookcases-normalized', bookcaseExclDaybedsBeds, flags=re.IGNORECASE)


			# match 'chest', NOT 'package' or 'accent' or 'bedside' or 'tv stand'
			chestExclAccentBedsideTvStand = bookcaseExclDaybedsBeds
			if bool(re.search('^.*accent.*$', chestExclAccentBedsideTvStand)) is False:
				if bool(re.search('^.*bedside.*$', chestExclAccentBedsideTvStand)) is False:
					if bool(re.search('^.*tv stand.*$', chestExclAccentBedsideTvStand)) is False:
						if bool(re.search('^.*accent chest.*$', chestExclAccentBedsideTvStand)) is False:						
							chestExclAccentBedsideTvStand = re.sub('^.*chest.*$|^.*chest & mirror.*$', 'Bedroom > Chests-normalized', chestExclAccentBedsideTvStand, flags=re.IGNORECASE)

			# match 'mirror', NOT 'bedroom packages' or 'dresser/mirror sets' or 'dining room' or 'chest'
			mirrorExclBrPkgDresserMirrorSetsDngRmChest = chestExclAccentBedsideTvStand
			if bool(re.search('^.*bedroom packages.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
				if bool(re.search('^.*dresser\/mirror sets.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
					if bool(re.search('^.*dining room.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
						if bool(re.search('^.*chest.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:
							if bool(re.search('^.*bedroom > chests.*$', mirrorExclBrPkgDresserMirrorSetsDngRmChest)) is False:							
								mirrorExclBrPkgDresserMirrorSetsDngRmChest = re.sub('^.*mirror.*$', 'Accents > Mirrors-normalized', mirrorExclBrPkgDresserMirrorSetsDngRmChest, flags=re.IGNORECASE)

			# match 'loveseat', NOT 'package' or 'outdoor'
			loveseatExclPkgOutdoor = mirrorExclBrPkgDresserMirrorSetsDngRmChest
			if bool(re.search('^.*package.*$', loveseatExclPkgOutdoor)) is False:
				if bool(re.search('^.*outdoor.*$', loveseatExclPkgOutdoor)) is False:
					loveseatExclPkgOutdoor = re.sub('^.*loveseat.*$', 'Living Room > Loveseats-normalized', loveseatExclPkgOutdoor, flags=re.IGNORECASE)

			# match 'chaise', NOT 'sectional' or 'sofa' or 'futon' or 'outdoor' or 'package'
			chaiseExclSectionSofaFutonOutdoorPackage = loveseatExclPkgOutdoor
			if bool(re.search('^.*sectional.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
				if bool(re.search('^.*sofa.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
					if bool(re.search('^.*futon.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
						if bool(re.search('^.*outdoor.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
							if bool(re.search('^.*package.*$', chaiseExclSectionSofaFutonOutdoorPackage)) is False:
								chaiseExclSectionSofaFutonOutdoorPackage = re.sub('^.*chaise.*$', 'Living Room > Chaises-normalized', chaiseExclSectionSofaFutonOutdoorPackage, flags=re.IGNORECASE)

			# match 'sofa', NOT 'package' or 'loveseat' or 'sectional' or 'table' or 'sleeper' or futon or 'apartment' or 'outdoor'
			sofaExclPkgLveseatSectTbleSlprFutonAptOutdr = chaiseExclSectionSofaFutonOutdoorPackage
			if bool(re.search('^.*package.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
				if bool(re.search('^.*loveseat.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
					if bool(re.search('^.*sectional.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
						if bool(re.search('^.*table.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
							if bool(re.search('^.*sleeper.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
								if bool(re.search('^.*futon.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
									if bool(re.search('^.*apartment.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
										if bool(re.search('^.*outdoor.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:
											if bool(re.search('^.*sleepers.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:	
												if bool(re.search('^.*living room.*(?=sleeper.sofas).*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:	
													if bool(re.search('^.*table.*$', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr)) is False:																																		
														sofaExclPkgLveseatSectTbleSlprFutonAptOutdr = re.sub('^.*sofa.*$', 'Living Room > Sofas-normalized', sofaExclPkgLveseatSectTbleSlprFutonAptOutdr, flags=re.IGNORECASE)
		
			# match 'chair', NOT 'table' or 'dining' or 'office' or 'desk' or 'outdoor' or 'package' or 'recliner' or 'lift' or 'chaise'
			chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise = sofaExclPkgLveseatSectTbleSlprFutonAptOutdr
			if bool(re.search('^.*table.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
				if bool(re.search('^.*dining.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
					if bool(re.search('^.*office.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
						if bool(re.search('^.*desk.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
							if bool(re.search('^.*outdoor.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
								if bool(re.search('^.*package.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
									if bool(re.search('^.*recliner.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
										if bool(re.search('^.*lift.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
											if bool(re.search('^.*chaise.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:
												if bool(re.search('^.*benches.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
													if bool(re.search('^.*home office.*(?=chairs).*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
														if bool(re.search('^.*dining chair.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:	
															if bool(re.search('^.*side chair.*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:		
																if bool(re.search('^.*accent.*(?=benches).*$', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise)) is False:																																																	
																	chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise = re.sub('^.*upholstery.*(?=chairs).*$|^.*leather.*(?=chairs).*$|^.*accent pieces.*(?=chairs).*$|^.*chairs.*(?=swivel).*(?=chair).*$', 'Living Room > Chairs-normalized', chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise, flags=re.IGNORECASE)
			# normalize 
			removeNormalization = chairExclTbleDiningOfficeDeskOutdoorPkgReclinerLiftChaise.replace('-normalized', '')	
			productTypeRules = removeNormalization.replace("  >  "," > ")
			hadonLargePillowSham = row[3].replace('product/item//hadon-large-bolster-pillow-&-sham-ivory/1964840', 'product/item/hadon-large-bolster-pillow-sham-ivory/1987529/1964840')
			pdpLink = row[3].replace('item//', 'item/')
			writer.writerow([row[0],row[1].title(),row[2],pdpLink,row[4],row[5],row[6],row[7],row[8],row[9].replace("ASI-BRAND","Value City Furniture"),row[10],row[11],row[12],
							productTypeRules,row[14],row[15],row[16],row[17],row[18],row[19],row[20],row[21],row[22],row[23]])	
	#os.remove(fullpathXLSX)	
	#os.rename(temp, fullpathCSV)

def createXMLOutput():
	with open(fullpathCSV, 'rb') as f:
		reader = csv.reader(f)
		f.next()
		w = open(fullpathXML, 'w')
		w.write("<rss version=\"2.0\" xmlns:g=\"http://base.google.com/ns/1.0\">\n")
		w.write(tab(1)+"<channel>\n")
		# Domain specific title, link and description
		if args['d'] == 'asf':
			w.write(tab(2)+"<title>ASF-JellyFish</title>\n")
			w.write(tab(2)+"<link>http://www.americansignaturefurniture.com</link>\n")
			w.write(tab(2)+"<description>ASF-JellyFish</description>\n")
		else:
			w.write(tab(2)+"<title>VCF-JellyFish</title>\n")
			w.write(tab(2)+"<link>http://www.valuecityfurniture.com</link>\n")
			w.write(tab(2)+"<description>VCF-JellyFish</description>\n")		
		for row in reader:
			# Parse products in item nodes
			w.write(tab(2)+"<item>\n")

			ids = "<g:id>"+str(row[0])+"</g:id>\n"
			w.write(tab(3)+ids)

			title = "<g:title>"+str(row[1])+"</g:title>\n"
			w.write(tab(3)+title)

			description	= "<g:description>"+str(row[2])+"</g:description>\n"
			w.write(tab(3)+description)

			link = row[3].replace("item//","item/")
			link = "<g:link>"+str(link)+"</g:link>\n"
			w.write(tab(3)+link)

			condition = "<g:condition>"+str(row[4])+"</g:condition>\n"
			w.write(tab(3)+condition)

			price = "<g:price>"+str(row[5])+"<g:price>\n"
			w.write(tab(3)+price)

			availability = "<g:availability>"+str(row[6])+"</g:availability>\n"
			w.write(tab(3)+availability)

			image_link = row[7].replace("?fit=inside%7C1460:1460&composite-to=center,center%7C1500:1500&background-color=white", "")
			image_link = "<g:image_link>"+str(image_link)+"</g:image_link>\n"
			w.write(tab(3)+image_link)

			brand = "<g:brand>"+str(row[9])+"</g:brand>\n"
			w.write(tab(3)+brand)	

			identifier_exists = "<g:identifier_exists>"+str(row[11])+"</g:identifier_exists>\n"	
			w.write(tab(3)+identifier_exists)

			google_product_category = row[12].replace("&", "&amp;")
			google_product_category = google_product_category.replace(">", "&gt;")
			google_product_category = "<g:google_product_category>"+str(google_product_category)+"</g:google_product_category>\n"	
			w.write(tab(3)+google_product_category)

			product_type = row[13].replace("&", "&amp;")
			product_type = product_type.replace(">", "&gt;")		
			product_type = "<g:product_type>"+str(product_type)+"</g:product_type>\n"
			w.write(tab(3)+product_type)	

			colors = "<g:color>"+str(row[14])+"</g:color>\n"
			w.write(tab(3)+colors)

			shipping = "<g:shipping></g:shipping>\n"
			w.write(tab(3)+shipping)	

			custom_label_0 = "<g:custom_label_0>"+str(row[18])+"</g:custom_label_0>\n"
			w.write(tab(3)+custom_label_0)

			w.write(tab(2)+"</item>\n")

		w.write(tab(1)+"</channel>\n")
		w.write("</rss>")
		f.close()

def createBingOutput():
	# copy the final Google csv with rules applied to the Bing filename
	fieldnames = ['id', 'Title', 'description', 'link', 'condition', 'price', 'availability', 'image_link', 'gtin', 'brand', 'mpn', 'identifier_exists', 'product_category', 'product_type', 'item_group_id', 'custom_label_0', 'custom_label_1', 'custom_label_2', 'custom_label_3', 'custom_label_4']
	with open(fullpathCSV, 'rb') as f:
		reader = csv.reader(f)
		f.next()
		with open(fullpathBingCSV, 'w') as csvfile:
			writer = csv.DictWriter(csvfile, fieldnames=fieldnames)
			writer.writeheader()	
			for row in reader:
				writer.writerow({'id': row[0], 'Title': row[1], 'description': row[2], 'link': row[3], 'condition': row[4], 'price': row[5], 'availability': row[6], 'image_link': row[7], 'gtin': row[8],
							 'brand': row[9], 'mpn': row[10], 'identifier_exists': row[11], 'product_category': row[12], 'product_type': row[13], 'item_group_id': row[15], 'custom_label_0': row[18], 'custom_label_1': row[19], 'custom_label_2': row[20], 'custom_label_3': row[21], 'custom_label_4': row[22]})	

def fileUpload():	 	
	# Disable hostkeys check
	
	cnopts = pysftp.CnOpts()
	cnopts.hostkeys = None
	# connect to Resolution SFTP for PLA/DPA Feed
	
	with pysftp.Connection(host='home249957217.1and1-data.host', username='u49834858', password='$z@(&7^{]-/6~*V', port=22, cnopts=cnopts) as sftp:

		# set upload directory
		with sftp.cd('/resolution-feed'):

			# upload xlsx File
			print "\nSFTP Upload Started: " + str(filenameCSV) + " Filesize: " + str(fileSizeCSV)
			#w.write("SFTP Upload Started: " + str(filenameCSV) + " Filesize: " + str(fileSizeCSV))
			#w.write("\n")			
			sftp.put(fullpathCSV, preserve_mtime=True)
			print "SFTP Upload finished: resolution-feed/%s\n" % filenameCSV
			#w.write("SFTP Upload finished: upload/" + str(filenameXLSX))
			#w.write("\n")		

			# close the file
			#w.close()	

	print "Jellyfish FTP Upload Started: " + str(filenameXML) + " Filesize: " + str(fileSizeXML)		
	session = ftplib.FTP('ftp.jellyfish.co.uk','asi','w691N6jXoQ6Xo5KSCDUM')
	#print "FTP Upload Started: " + str(filenameXML) + " Filesize: " + str(fileSizeXML)
	file = open(fullpathXML,'rb')                  # file to send
	session.storbinary('STOR '+ filenameXML, file)     # send the file
	file.close()                                    # close file and FTP
	session.quit()
	# print the successful upload message
	print "Jellyfish FTP Upload finished: %s\n" % filenameXML


	print "Bing FTP Upload Started: " + str(filenameBingCSV) + " Filesize: " + str(fileSizeBingCSV)	
	# vcf and asf have different ftp credentials, switch between
	if args['d'] == "asf":
		# asf credentials
		session = ftplib.FTP('feeds.adcenter.microsoft.com','resolutionasf','\*sm}9!s06De1hw')
	else:
		# vcf credentials
		session = ftplib.FTP('feeds.adcenter.microsoft.com','resolution','TS4icxZ5Ln8TU*e')
	#print "FTP Upload Started: " + str(filenameXML) + " Filesize: " + str(fileSizeXML)
	file = open(fullpathBingCSV,'rb')                  # file to send
	session.storbinary('STOR '+ filenameBingCSV, file)     # send the file
	file.close()                                    # close file and FTP
	session.quit()
	# print the successful upload message
	print "Bing FTP Upload finished: %s\n" % filenameBingCSV		

# request the latest run of Salsify for Shoptelligence
r = requests.get(plaFeed)

if r.status_code == 200:
	# If request successful, download latest published xlsx file
	download_excel()

	# XLSX Download Complete
	fileSizeXLSX = fileSize(fullpathXLSX)
	print "Download Finished: " + filenameXLSX + " Filesize: " + str(fileSizeXLSX)

	# Create a CSV file from an XLSX
	csv_from_excel()

	# file clean up
	#os.remove(fullpathXLSX)	
	# this line uncommented in windows
	os.remove(fullpathCSV)		
	os.rename(temp, fullpathCSV)		

	# CSV Build has Finished
	fileSizeCSV = fileSize(fullpathCSV)
	print "CSV Conv. Finished: " + filenameCSV + " Filesize: " + str(fileSizeCSV)	

	# open CSV file and Output XML for JellyFish
	createXMLOutput()

	# RSS/XML Build has Finished
	fileSizeXML = fileSize(fullpathXML)
	print "XML Creation Finished: " + filenameXML + " Filesize: " + str(fileSizeXML)

	# create a Bing feed by copying Google feed and updating header row
	createBingOutput()

	# Bing build has finished
	fileSizeBingCSV = fileSize(fullpathBingCSV)
	print "Bing CSV Creation Finished: " + filenameBingCSV + " Filesize: " + str(fileSizeBingCSV)	

	# handle file upload here
	fileUpload()
	
elif r.status_code >= 400:
	print "Server Error %s" % str(r.status_code)
else:	    
	print "Some Other Error!"

print("--- %s seconds ---" % (time.time() - start_time))