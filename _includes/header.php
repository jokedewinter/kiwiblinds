
<!DOCTYPE html>
<!--[if IE 9 ]><html id="ie" class="no-js" lang="en-GB"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js"  lang="en-GB"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<title>Kiwi Blinds</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
	<link rel="stylesheet" href="<?php echo $root; ?>css/screen.min.css">
</head>

<!-- Depending on the page or template used, the body may have a class -->
<body class="<?php echo $page; ?>">

<!-- The SVG sprite -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="home" viewBox="0 0 28 28"><title>Home</title><path d="M22.9 15.2c.07.1.1.2.1.33 0 .12-.06.22-.15.3-.1.1-.2.13-.32.12-.13 0-.23-.05-.3-.14l-1.93-2.1v7.2c0 .38-.13.7-.4.96-.26.26-.58.4-.95.4h-9.9c-.37 0-.7-.14-.96-.4-.27-.27-.4-.58-.4-.95v-7.2l-1.92 2.1c-.04.06-.1.1-.15.12-.06.02-.12.04-.18.04-.05 0-.1 0-.16-.03-.06-.02-.1-.05-.15-.1-.1-.08-.14-.18-.15-.3 0-.13.03-.23.1-.33l7.96-8.78c.12-.14.27-.24.43-.3.15-.08.32-.12.5-.12s.35.04.5.1c.18.08.32.18.44.32l7.95 8.78zm-7.1 6.15V17.3c0-.12-.04-.23-.13-.3-.1-.1-.2-.15-.32-.15h-2.7c-.13 0-.23.05-.32.14-.1.07-.13.18-.13.3v4.05h3.6zm3.6-.44v-8.2l-5.13-5.68-.12-.1L14 6.9c-.05 0-.1 0-.14.03-.05.02-.1.05-.13.1L8.6 12.7v8.2c0 .13.05.23.14.32.08.1.2.13.3.13h2.26V17.3c0-.37.13-.68.4-.95.26-.26.58-.4.95-.4h2.7c.37 0 .7.14.95.4.27.27.4.58.4.95v4.05h2.25c.12 0 .23-.04.32-.13.08-.1.13-.2.13-.3z" fill="#404348" fill-rule="evenodd"/></symbol><symbol id="cart" viewBox="0 0 28 28"><title>Shopping cart</title><path d="M13 23c-.27 0-.53-.05-.77-.16-.25-.1-.46-.24-.64-.42-.2-.18-.33-.4-.44-.64-.1-.24-.16-.5-.16-.77s.05-.53.16-.78c.1-.24.25-.45.43-.63.17-.2.38-.34.63-.44.24-.1.5-.16.77-.16.28 0 .54.06.78.16s.46.25.64.43c.18.17.32.38.43.62.1.25.15.5.15.8 0 .26-.05.52-.15.76-.1.25-.25.46-.43.64s-.4.32-.64.42c-.24.1-.5.16-.78.16zm0-3c-.27 0-.5.1-.7.3-.2.2-.3.43-.3.7 0 .28.1.5.3.7.2.2.43.3.7.3.28 0 .52-.1.7-.3.2-.2.3-.42.3-.7 0-.27-.1-.5-.3-.7-.18-.2-.42-.3-.7-.3zm7 3c-.27 0-.53-.05-.77-.16-.25-.1-.46-.24-.64-.42-.2-.18-.34-.4-.44-.64-.1-.24-.16-.5-.16-.77s.05-.53.16-.78c.1-.24.25-.45.43-.63.17-.2.38-.34.63-.44.24-.1.5-.16.77-.16.28 0 .54.06.78.16s.46.25.64.43c.18.17.33.38.43.62.1.25.16.5.16.8 0 .26-.05.52-.15.76-.1.25-.25.46-.43.64s-.4.32-.64.42c-.24.1-.5.16-.78.16zm0-3c-.27 0-.5.1-.7.3-.2.2-.3.43-.3.7 0 .28.1.5.3.7.2.2.43.3.7.3.28 0 .5-.1.7-.3.2-.2.3-.42.3-.7 0-.27-.1-.5-.3-.7-.2-.2-.42-.3-.7-.3zm2.54-12.53c.13.15.2.32.27.5.06.2.07.4.04.6l-.68 4.03c-.06.38-.25.72-.56 1-.3.3-.66.45-1.05.48l-9.96.87.23 1.5c.03.14.1.27.24.38.14.1.28.17.44.17h10c.14 0 .26.05.36.15.1.1.15.2.15.35 0 .14-.04.25-.14.35-.1.1-.22.15-.35.15h-10c-.4 0-.76-.14-1.08-.4-.32-.28-.5-.6-.57-1L8.18 6.57c-.03-.15-.1-.28-.24-.4-.13-.1-.28-.16-.44-.16h-1c-.14 0-.26-.04-.35-.14-.1-.1-.15-.22-.15-.36 0-.14.05-.26.15-.35.1-.1.2-.15.36-.15h1c.4 0 .76.14 1.08.4.33.28.52.62.58 1l.1.6H21.5c.2 0 .4.04.58.12.2.1.34.2.46.35zm-.7.94c.02-.05 0-.1 0-.15 0-.05-.03-.1-.06-.13-.03-.04-.07-.07-.12-.1L21.5 8H9.44l1 5.96 10.03-.87c.17-.03.32-.1.46-.23.15-.14.23-.28.26-.44l.67-4.02z" fill-rule="evenodd"/></symbol><symbol id="previous" viewBox="0 0 28 28"><title>Previous</title><path d="M5.14 13.97l5.84-5.83c.1-.1.2-.14.35-.14.13 0 .24.05.34.14.1.1.14.2.14.34s-.04.25-.13.35l-5 5H22.5c.15 0 .26.05.36.14.1.1.14.22.14.36 0 .13-.05.24-.14.34-.1.1-.2.14-.35.14H6.67l5 5.02c.1.1.15.2.15.34 0 .13-.04.25-.13.34-.05.05-.1.1-.16.1-.05.03-.1.04-.17.04s-.13 0-.2-.03c-.05 0-.1-.05-.15-.1l-5.84-5.83c-.1-.1-.14-.2-.14-.35 0-.13.05-.25.14-.35z" fill-rule="evenodd"/></symbol><symbol id="next" viewBox="0 0 28 28"><title>Next</title><path d="M22.86 13.97l-5.84-5.83c-.1-.1-.2-.14-.35-.14-.13 0-.24.05-.34.14-.1.1-.14.2-.14.34s.04.25.13.35l5 5H5.5c-.15 0-.26.05-.36.14-.1.1-.14.22-.14.36 0 .13.05.24.14.34.1.1.2.14.35.14h15.84l-5 5.02c-.1.1-.15.2-.15.34 0 .13.04.25.13.34.05.05.1.1.16.1.05.03.1.04.17.04s.13 0 .2-.03c.05 0 .1-.05.15-.1l5.84-5.83c.1-.1.14-.2.14-.35 0-.13-.05-.25-.14-.35z" fill-rule="evenodd"/></symbol><symbol id="empty-star" viewBox="0 0 28 28"><title>No star rating</title><path d="M19.5 22h-.12l-.1-.06L14 19.07l-5.26 2.87c-.08.05-.17.07-.27.06-.1 0-.18-.03-.26-.1-.07-.04-.12-.12-.16-.2C8 21.6 8 21.5 8 21.4l.96-5.75-3.8-3.8c-.08-.08-.12-.16-.15-.25 0-.1 0-.18.03-.27.02-.1.07-.17.15-.23.07-.06.15-.1.24-.1l5.75-.97 2.38-4.77c.05-.1.1-.16.2-.2C13.8 5 13.9 5 14 5c.1 0 .2.02.27.07.08.05.14.12.18.2l2.4 4.78 5.74.96c.08.03.16.06.23.12s.12.14.15.23c.03.1.04.18 0 .27 0 .1-.05.17-.12.24l-3.82 3.8.96 5.76c0 .1 0 .2-.03.27-.04.08-.1.16-.18.2-.05.04-.1.06-.15.08l-.15.02zM14 18c.04 0 .08 0 .13.02.04 0 .08.03.12.05l4.6 2.5L18 15.6c0-.1 0-.17.03-.25.02-.08.07-.14.12-.2l3.3-3.3-5.02-.85c-.1-.02-.16-.05-.22-.1s-.1-.1-.15-.18L14 6.62l-2.05 4.1c-.04.07-.1.13-.15.18-.06.05-.13.08-.22.1l-5.04.84 3.3 3.3c.07.07.1.13.14.2.03.1.03.17.02.25l-.83 4.98 4.6-2.5c.03-.03.07-.05.1-.06.05-.02.1-.02.13-.02z" fill="#404348" fill-rule="evenodd"/></symbol><symbol id="full-star" viewBox="0 0 28 28"><title>Full star rating</title><path d="M19.5 22h-.12l-.1-.06L14 19.07l-5.26 2.87c-.08.05-.17.07-.27.06-.1 0-.18-.03-.26-.1-.07-.04-.12-.12-.16-.2C8 21.6 8 21.5 8 21.4l.96-5.75-3.8-3.8c-.08-.08-.12-.16-.15-.25 0-.1 0-.18.03-.27.02-.1.07-.17.15-.23.07-.06.15-.1.24-.1l5.75-.97 2.38-4.77c.05-.1.1-.16.2-.2C13.8 5 13.9 5 14 5c.1 0 .2.02.27.07.08.05.14.12.18.2l2.4 4.78 5.74.96c.08.03.16.06.23.12s.12.14.15.23c.03.1.04.18 0 .27 0 .1-.05.17-.12.24l-3.82 3.8.96 5.76c0 .1 0 .2-.03.27-.04.08-.1.16-.18.2-.05.04-.1.06-.15.08l-.15.02z" fill="#404348" fill-rule="evenodd"/></symbol></svg>

<div class="site">

	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site__header" role="banner">
		<h1>
			<a href="<?php echo $root; ?>index.php" rel="home" title="Return to home page">
				<span class="screen-reader-text">Kiwi Blinds &amp; curtains</span>
				<img src="<?php echo $root; ?>images/kiwi-logo.jpg" alt="Kiwi logo" />
			</a>
		</h1>
		
		<div>
			<a class="link--phone" href="tel:01509269397">01509 269397</a>
			<form action="<?php echo $root; ?>cart.html" method="post">
				<button class="button--cart" type="submit" title="Shopping Cart" name="submit">Cart {{0}}</button>
			</form>
		</div>
	</header><!-- .site__header -->

	<nav class="site__navigation" role="navigation" aria-label="Main Menu">
		<button id="nav__toggle" class="nav__toggle">Menu</button>
		
		<!-- The <a> element of the current page needs to be class 'current' and 'aria-current="page"' -->
		<ul class="nav__menu">
			<li><a href="<?php echo $root; ?>fabrics" <?php if ( 'fabrics' == $page ) { echo 'aria-current="page" class="current"'; } ?>>Fabrics</a></li>
			<li><a href="<?php echo $root; ?>blinds" <?php if ( 'blinds' == $page ) { echo 'aria-current="page" class="current"'; } ?>>Blinds</a></li>
			<li><a href="<?php echo $root; ?>louvres" <?php if ( 'louvres' == $page ) { echo 'aria-current="page" class="current"'; } ?>>Louvres</a></li>
			<li><a href="<?php echo $root; ?>wallpaper" <?php if ( 'wallpaper' == $page ) { echo 'aria-current="page" class="current"'; } ?>>Wallpaper</a></li>
			<li><a href="<?php echo $root; ?>accessories" <?php if ( 'accessories' == $page ) { echo 'aria-current="page" class="current"'; } ?>>Accessories &amp; Parts</a></li>
		
			<li>
				<form class="site__search" action="search.php" method="post" novalidate="novalidate">
					<label for="searchString"><span class="screen-reader-text">Search</span></label>
					<input class="site__search" placeholder="Search" id="searchString" name="searchString" type="text" value="" autocomplete="off">
					<button type="submit" value="Search" title="Search" id="btnSearch" name="submit"></button>
				</form>
			</li>
		</ul>
	</nav><!-- .site__navigation -->


