'''
# insert a new cronttab
env EDITOR=nano crontab -e

# configure virtualenv, cd into project, run script
<<<<<<< HEAD
30 9 * * * source ../jwells/Sites/bin/activate ; cd ../../../Applications/MAMP/htdocs/shoptelligence ; python shoptelligence-xls-to-json.py -d single
30 9 * * * source ../jwells/Sites/bin/activate ; cd ../../../Applications/MAMP/htdocs/shoptelligence ; python shoptelligence-xls-to-json.py -d full
=======
* * * * * source ../jwells/Sites/bin/activate ; cd ../../../Applications/MAMP/htdocs/shoptelligence ; python shoptelligence-xls-to-json.py -d single
* * * * * source ../jwells/Sites/bin/activate ; cd ../../../Applications/MAMP/htdocs/shoptelligence ; python shoptelligence-xls-to-json.py -d full
>>>>>>> origin/master

# check running crontabs
contab -l

'''

import requests
import os
import sys
import json
import urllib
import time
import xlrd
from collections import OrderedDict
import simplejson as json
import pysftp
import argparse

# start execution timer
start_time = time.time()

# Control which channel 
parser = argparse.ArgumentParser(description='Salsify -> Shoptelligence - Feed Generator')
parser.add_argument('-d', help='"single" or "full"', required=True)
args = vars(parser.parse_args())

def salsifyAPI(d):
	# set domain
	if args['d'] == 'single':
		domain = "https://app.salsify.com/api/channels/54837/runs/latest?access_token=2618a717246c8a24538dd82f312f0ee406e57f928185437d8f26c377f54feb3b"
		return domain
	elif args['d'] == 'full':
		domain = "https://app.salsify.com/api/channels/50740/runs/latest?access_token=2618a717246c8a24538dd82f312f0ee406e57f928185437d8f26c377f54feb3b"
		return domain
	else:
		pass

def fileSize(file):
	statinfo = os.stat(file)
	return "{:,}".format(statinfo.st_size) + " bytes"

# Set output filename
datetime = time.strftime("%m-%d-%Y-%H-%M-%S")
# xlsx
filenameXLSX = str("shoptelligence-salsify-"+args['d']+"-"+datetime+".xlsx")
fullpathXLSX = os.path.join("output", filenameXLSX)
# json
filenameJSON = str("shoptelligence-salsify-"+args['d']+"-"+datetime+".json")
fullpathJSON = os.path.join("output", filenameJSON)

# Set up logs
filename = str("logs/shoptelligence-salsify-"+args['d']+"-"+datetime+".txt")
w = open(filename, 'w')

if args['d'] != None:
# request the latest run of Salsify for Shoptelligence
	r = requests.get(salsifyAPI(args['d']))

	if r.status_code == 200:
		# If request successful, grab export url and download
		salsifyLatestRun = r.json()
		productExportUrl = salsifyLatestRun['product_export_url']
		downloadFile = urllib.URLopener()
		downloadFile.retrieve(productExportUrl, fullpathXLSX)
		# get download filesize
		fileSizeXLSX = fileSize(fullpathXLSX)
		print "Download Finished: " + filenameXLSX + " Filesize: " + str(fileSizeXLSX)
		w.write("Download Finished: " + str(filenameXLSX) + " Filesize: " + str(fileSizeXLSX))

		# open up the file and select the sheet
		wb = xlrd.open_workbook(fullpathXLSX)
		sh = wb.sheet_by_index(0)

		# List to hold dictionaries
		items = []

		# set global paths and special instructions
		instructions = {
			"VCFdataImagePath" : "http://content.valuecityfurniture.com/ProductImages/0/",
		    "ASFdataImagePath" : "http://content.americansignaturefurniture.com/ProductImages/0/",
		    "dataImageInstructions" : "The last image id should be the image to use for swatching. Our business logic is to always place the swatch image as the last item in the product image list.",
		    "categoryInstructions" : "Pipe Separated List. The Category is the hierarchical item taxonomy each level of the taxonomy is separated by a pipe."
		}

		items.append(instructions)

		# Iterate through each row in worksheet and fetch values into dict
		for rownum in range(1, sh.nrows):
		    attr = OrderedDict()
		    row_values = sh.row_values(rownum)
		    # full feed excluding collections/packages
		    if args['d'] == "full":
		    	attr['SKU'] = row_values[0]
		    	data = row_values[1]
		    	attr['Data'] = data.split('|')
		    	attr['Category'] = row_values[2]
		    	attr['Title'] = row_values[3]
		    	attr['Description'] = row_values[4]
		    	attr['Inventory'] = row_values[5]
		    	items.append(attr)
		    elif args['d'] == "single":
		    	# single item feed
		    	attr['SKU'] = row_values[0]
		    	attr['ItemID'] = row_values[1]
		    	data = row_values[2]
		    	attr['Data'] = data.split('|')
		    	attr['SwatchImage'] = row_values[3]
		    	attr['PieceType'] = row_values[4]
		    	attr['Room'] = row_values[5]
		    	attr['Category'] = row_values[6]
		    	attr['Title'] = row_values[7]
		    	attr['Desciption'] = row_values[8]
		    	attr['Inventory'] = row_values[9]
		    	items.append(attr)	
		    else:
		    	pass			

		# Wrap data object in "Items" array
		itemsArray = {
			'Items': items
		}
		 
		# Serialize the list of dicts to JSON
		j = json.dumps(itemsArray, indent=4 * ' ')
		 
		# Write to file
		with open(fullpathJSON, 'w') as f:
		    f.write(j)
		    print "JSON File Created: " + str(fullpathJSON) + " Filesize: " + fileSize(fullpathJSON) + "\n"
		    w.write("\n")
		    w.write("JSON File Created: " + str(fullpathJSON) + " Filesize: " + str(fileSize(fullpathJSON)))
		    w.write("\n")
		    w.write("\n")
	else: 
		# Something went wrong output debug
		print "Status was %s, Something Wrong" % r.status_code
		print r.text
		w.write("\n")
		w.write("Status was %s, Something Wrong" % str(r.status_code))
		w.write("\n")
		w.write(r.text)		
else:
	# Shouldn't be possible, argument required
	pass

# Disable hostkeys check
cnopts = pysftp.CnOpts()
cnopts.hostkeys = None
# connect to server
with pysftp.Connection(host='sandbox.shoptelligence.com', username='asi', password='st2016@asi', port=22, cnopts=cnopts) as sftp:

	# set upload directory
	with sftp.cd('/upload'):

		# upload xlsx File
		print "SFTP Upload Started: " + str(filenameXLSX) + " Filesize: " + str(fileSizeXLSX)
		w.write("SFTP Upload Started: " + str(filenameXLSX) + " Filesize: " + str(fileSizeXLSX))
		w.write("\n")			
		sftp.put(fullpathXLSX, preserve_mtime=True)
		print "SFTP Upload finished: upload/%s\n" % filenameXLSX
		w.write("SFTP Upload finished: upload/" + str(filenameXLSX))
		w.write("\n")		

		# upload JSON file
		fileSizeJSON = fileSize(fullpathJSON)
		print "SFTP Upload Started: " + str(filenameJSON) + " Filesize: " + str(fileSizeJSON)
		w.write("\n")
		w.write("SFTP Upload Started: " + str(filenameJSON) + " Filesize: " + str(fileSizeJSON))
		w.write("\n")	
		sftp.put(fullpathJSON, preserve_mtime=True)
		print "SFTP Upload finished: upload/%s" % filenameJSON
		w.write("SFTP Upload finished: upload/" + str(filenameJSON))

		# close the file
		w.close()

print("--- %s seconds ---" % (time.time() - start_time))