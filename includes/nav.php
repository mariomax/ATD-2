<?php
	$home = 'https://www.anchortagdesign.com/';
	$test = '../ATD-2/';
?>
<nav class="navbar navbar-nav collapse sticky-top" role="navigation">
	<a class="nav-link navbar-link-brand" id="a-tag" data-value="navigation" href="<?php echo htmlspecialchars($test . 'index.php'); ?>">
	  <img src="images/navicon.svg" alt="anchor tag design icon">
	</a>
	<div class="navbar-link-toggle">
		<i class="fas fa-bars"></i>
	</div>
	<ul class="navbar-nav navbar-items">
		<li class="nav-item">
			<a class="nav-link" data-value="portfolio" href="$home . 'web-tools'";>Portfolio</a>
		</li>
		<li class="nav-item">
			<a class='nav-link' data-value='tools' href="<?php echo htmlspecialchars($test . 'web-tools/index.html.php'); ?>">Web Tools</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-value="contact" href="<?php echo htmlspecialchars($test . 'contact/index.html.php'); ?>">Contact</a>
		</li>
	</ul>
</nav>