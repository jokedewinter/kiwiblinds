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
			<h1 class="pt__h1">Icons</h1>
			
			<?php echo file_get_contents('html/icons-location.html'); ?>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/icons-location.html')); ?></code></pre>
		
		    <?php echo file_get_contents('html/icons-phone.html'); ?>
		    <pre><code><?php echo htmlspecialchars(file_get_contents('html/icons-phone.html')); ?></code></pre>
		
		    <?php echo file_get_contents('html/icons-mail.html'); ?>
		    <pre><code><?php echo htmlspecialchars(file_get_contents('html/icons-mail.html')); ?></code></pre>
		
		    <?php echo file_get_contents('html/icons-cart.html'); ?>
		    <pre><code><?php echo htmlspecialchars(file_get_contents('html/icons-cart.html')); ?></code></pre>
		</div>
	
	</main>
	
</div><!-- .site -->

</body>
</html>