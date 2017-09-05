
<template lang="pug">
	div (id='asi-adaptive-img-hero')
		div (class='section asi-section asi-mix-hero-wrapper')
			div (id='asi-mix-hero' class='asi-bg-hero-image asi-adaptive-hero container-fluid asi-container-fluid asi-fluid-hero')
				a (href='{{imgLink}}' data-pos='{{dataPos}}')
					img (class='data-img img-data img-responsive' src='{{imgSrc}}' data-lrg='{{imgLrg}}' data-med='{{imgMed}}' data-sml='{{imgSml}}' alt='{{imgAlt}}')
</template>
<script>
	module.exports = {
		data: function() {
			return {
				dataPos: '1',
				imgLink: '/search/on-sale',
				imgSrc: 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=1920',
				imgLrg: 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=1920',
				imgMed: 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=768',
				imgSml: 'https://asf.scene7.com/is/image/ASF/SALE_06WK5Y17?fmt=jpg&qlt=85,1&wid=768',
				imgAlt: 'first time ever save 10-30% off no minimum'
			}
		}
	}
</script>