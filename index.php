<?php $currentPage="Home"; ?>
<!DOCTYPE html>
<html lang="en">
	<?php include 'includes/head.php'; ?>
<body>

	<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=2074499839536564&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

	<?php include 'includes/navigation.php'; ?>
	<?php include 'includes/header.php'; ?>
	<?php include 'includes/portfolio.php'; ?>
	<?php include 'contact/index.php'; ?>
	<?php include 'includes/footer.php'; ?>

	<script type="text/javascript" src='js/main.js'></script>
	<script src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
</body>
</html>