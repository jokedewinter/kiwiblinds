	
	<footer id="colophon" class="site__footer" role="contentinfo">
	
		<div class="footer__info">
			<nav role="navigation" aria-label="Footer Menu">
				<ul>
					<li><a href="<?php echo $root; ?>how-to-measure.html">How to measure</a></li>
					<li><a href="<?php echo $root; ?>fitting-instructions">Fitting instructions</a></li>
					<li><a href="<?php echo $root; ?>contact.html">Contact</a></li>
					<li><a href="<?php echo $root; ?>/_patterns">Pattern Library</a></li>
					<li><a href="<?php echo $root; ?>checkout.html">Checkout</a></li>
				</ul>
			</nav><!-- .footer__nav -->
	
			<div>
				<p><a class="link--phone" href="tel:01509269397">01509 269397</a></p>
				<p class="link--location">29 Moira Street, Loughborough, LE11 1AX</p>
			</div>
			
			<img src="<?php echo $root; ?>images/geotrust.jpg" alt="Geo Trust Secured website">
		</div><!-- .footer__info -->
		
		<div class="footer__legal">
			<p>Copyright &copy; 2017 Kiwi Blinds</p>
			<p><a href="<?php echo $root; ?>terms-conditions.html">Terms & Conditions</a> | <a href="/_patterns/index.html">Pattern Library</a></p>
			<p class="jokedewinter"><a href="https://www.jokedewinter.co.uk" rel="external"><span class="screen-reader-text">Web design by Joke De Winter</span></a></p>
		</div><!-- .footer__legal -->
		
	</footer><!-- .site__footer -->

</div><!-- .site -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $root; ?>js/functions.min.js"></script>

<!-- Slick slider for products on narrow viewports -->
<script>
( function( $ ) {

	var viewport_width = $(window).width();
	if ( viewport_width < 600 ) {
	
		$('.products').slick({
			arrows: true,
			infinite: true,
			slidesToShow: 2,
			variableWidth: true,
			lazyLoad: 'progressive',
			swipeToSlide: true,
			prevArrow: '<button type="button" class="slick-prev"><span class="screen-reader-text">Previous</span></button>',
			nextArrow: '<button type="button" class="slick-next"><span class="screen-reader-text">Next</span></button>',
		});
	
	}
	
	$('.product__images').slick({
		arrows: true,
		slidesToShow: 1,
		variableWidth: false,
		lazyLoad: 'progressive',
		swipeToSlide: true,
		prevArrow: '<button type="button" class="slick-prev"><span class="screen-reader-text">Previous</span></button>',
		nextArrow: '<button type="button" class="slick-next"><span class="screen-reader-text">Next</span></button>',
	});
	
} )( jQuery );
</script>


</body>
</html>
