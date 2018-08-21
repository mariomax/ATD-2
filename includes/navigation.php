<nav class="navbar navbar-nav collapse sticky-top" role="navigation">
	<a class="nav-link navbar-link-brand" id="a-tag" data-value="navigation" href="<?php if ($currentPage=='Home') echo '#'; else echo 'index.php'; ?>">
	  <img src="images/navicon.svg" alt="anchor tag design icon">
	</a>
	<div class="navbar-link-toggle">
		<i class="fas fa-bars"></i>
	</div>
	<ul class="navbar-nav navbar-items">
	<li class="nav-item">
			<a class="nav-link" data-value="home" href="<?php if ($currentPage=='Home') echo '#'; else echo 'index.php'; ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-value="portfolio" href="#portfolix">Portfolio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-value="tools" href="<?php if ($currentPage=='Web Tools') echo '#'; else echo 'web-tools.php'; ?>">Web Tools</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-value="contact" href="<?php if ($currentPage=='Contact') echo '#'; else echo 'contact/index.html.php'; ?>">Contact</a>
		</li>
	</ul>
</nav>