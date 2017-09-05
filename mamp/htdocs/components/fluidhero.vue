<template lang="pug">
	div(id='asi-fluid-html-hero')
		div(class='section asi-section asi-mix-hero-wrapper')
			div(id='asi-mix-hero' class='asi-bg-hero-image container-fluid asi-container-fluid asi-fluid-hero')
				div(class='row asi-row')
					div(id='asi-content-col' class='{{colClass}}')
						div(class='asi-content asi-content-body')
							div(id='asi-hero-wrapper' class='asi-section-content-wrapper')
								p(class='asi-urgency-msg text-center')
									{{urgencyText}}
									div(class='asi-divider')
										div(class='asi-divider-line')											
											h1(class='asiH1 asi-h1 display-1 asi-display-1 text-center')
												{{h1Text}}
											p(class='asi-hero-message asi-lead lead asi-hero-lead text-center')
												{{leadText}}
											p(class='asi-hero-sub-message asi-sub-lead text-center')
												{{subLeadText}}
											div(id='asi-hero-btn-wrap')
												a(id='asiHero-button-link' target='_self' href='{{btnLink}}' data-pos='{{dataPos}}')
													button(id='asiHero-button' class='{{btnClass}}')
														{{btnCta}}
</template>
<script>
	module.exports = {
		data: function() {
			return {
				heroBgImage: 'https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg',
				colClass:'col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12',
				urgencyText:'GOING ON NOW!',
				h1Text:'20% OFF <br> OVERSTOCKS',
				leadText:'SCORE SOFAS, CHAIRS, BEDS, &amp; MORE',
				subLeadText: 'while quantities last - selection may vary by store',
				btnClass: 'asi-mix-button white',
				btnCta: 'SHOP NOW',
				btnLink: '/search/on-sale'
			}
		}
	}
</script>
<style scoped>
	.asi-bg-hero-image {
		background:url('https://asf.scene7.com/is/image/ASF/asi-furniture-tile-bg.jpg');
	}
	.asi-content-body {
		padding: 12% 15px;
	}
</style>
