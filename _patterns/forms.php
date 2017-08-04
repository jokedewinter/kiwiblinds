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
			<h1 class="pt__h1">Form elements</h1>
			
			<h2 class="pt__h2">Radio buttons</h2>
			<p class="pt__info">Use an unordered list with a <code>.css3--radio</code> class. Use list elements for each radio button option.</p> 
		    <?php echo file_get_contents('html/forms-radio.html'); ?>
		    <pre><code><?php echo htmlspecialchars(file_get_contents('html/forms-radio.html')); ?></code></pre>
		
			<h2 class="pt__h2">Checkboxes</h2>
			<p class="pt__info">Use an unordered list with a <code>.css3--checkbox</code> class. Use list elements for each checkbox button option.</p> 
		    <?php echo file_get_contents('html/forms-checkbox.html'); ?>
		    <pre><code><?php echo htmlspecialchars(file_get_contents('html/forms-checkbox.html')); ?></code></pre>
		
			<h2 class="pt__h2">Select box</h2>
			<p class="pt__info">Enclose the select element inside a div with a <code>.css3--select</code> class.</p> 
		    <?php echo file_get_contents('html/forms-select.html'); ?>
			<pre><code><?php echo htmlspecialchars(file_get_contents('html/forms-select.html')); ?></code></pre>
		</div>

	</main>
	
</div><!-- .site -->

</body>
</html>