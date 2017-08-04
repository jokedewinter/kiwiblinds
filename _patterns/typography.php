<!DOCTYPE html>
<!--[if IE 9 ]><html id="ie" class="no-js" lang="en-GB"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js"  lang="en-GB"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pattern library | Kiwi Blinds</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/screen.min.css">
	<link rel="stylesheet" href="../css/patterns.min.css">
</head>

<body class="pt">

<div class="pt__site">

	<h1 class="pt__masthead" role="banner">Kiwi Blinds patterns and styleguide</h1>

	<nav class="pt__nav" role="navigation" aria-label="Main menu">
		<p><a href="../index.html">Site</a></p>
		<h3 class="pt__h3">Elements</h3>
		<ul>
			<li><a href="typography.php">Typography</a></li>
			<li><a href="icons.php">Icons</a></li>
			<li><a href="links.php">Links</a></li>
			<li><a href="buttons.php">Buttons</a></li>
			<li><a href="forms.php">Forms</a></li>
		</ul>
		<h3 class="pt__h3">Modules</h3>
		<ul>
			<li><a href="sidebar.php">Sidebar</a></li>
		</ul>
	</nav>
	
	<main class="pt__main" role="main">

		<div class="pt__section">
			<h1 class="pt__h1">Typography</h1>
			<p class="pt__info">The typeface for the website is Poppins, and it is used for all the text on the website. It's available from Google Fonts and it is served from their servers to the website.</p>
			<p class="pt__info">The line height is generally 1.5, adjustments are made for some headings.</p>
			<pre><code>&lt;link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet"></code></pre>
			<pre><code>body { font-family: 'Poppins', Verdana, sans-serif; }</code></pre>
		</div>
		
		<div class="pt__section">
			<h2 class="pt__h2">Headings</h2>
			
			<?php echo file_get_contents('html/typography-h1.html'); ?>
			<p class="pt__info">The heading used for the main title on pages</p>
			<p class="pt__value">Poppins Bold / 36px / line height 1.2 / margin-bottom 14px</p>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/typography-h1.html')); ?></code></pre>

			<?php echo file_get_contents('html/typography-h2.html'); ?>
			<p class="pt__info">Heading used for stand-alone sections on pages or major sub titles in body text.</p>
			<p class="pt__value">Poppins Bold / 28px / line height 1.2 / margin-bottom 14px</p>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/typography-h2.html')); ?></code></pre>
			
			<?php echo file_get_contents('html/typography-h3.html'); ?>
			<p class="pt__info">Heading used for smaller sub titles in body text</p>
			<p class="pt__value">Poppins Bold / 14px / uppercase / letter-spacing 1px / line height 1.5 / margin-bottom 14px</p>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/typography-h3.html')); ?></code></pre>
		</div>
		
		<div class="pt__section">
			<h2 class="pt__h2">Body text</h2>
			
			<?php echo file_get_contents('html/typography-p.html'); ?>
			<p class="pt__info">The style for the main body text on pages and posts.</p>
			<p class="pt__value">Poppins Regular / 18px / margin-bottom 14px</p>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/typography-p.html')); ?></code></pre>
		</div>
	
		</main>
	
</div><!-- .site -->

</body>
</html>	