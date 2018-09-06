<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Mario Lopriore" />
	<meta name="description" content="Anchor Tag Design: Web Design | Photography | Graphic Design" />
	<meta name="keywords" content="portland web designer, website design, freelance web design, graphic design, digital photography, web designers, portfolio websites, custom web sites, small business websites, Portland Oregon" />
	
	<title>Anchor Tag Design</title>

	<!-- Facebook Open Graph markup -->
	<meta property="og:url" content="https://www.anchortagdesign.com/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Anchor Tag Design" />
	<meta property="og:description" content="Freelance web design, graphics and photography for artists, makers, and small businesses. Based in Portland, Oregon" />
	<meta property="og:image" content="http://www.anchortagdesign.com/linkedin-og-image.jpg" />
	<meta property="fb:app_id" content="966242223397117" || content="2074499839536564" />

	<!-- Twitter Card markup -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@mariojames211" />
	<meta name="twitter:title" content="Portland Oregon Web Designer and Photographer" />
	<meta name="twitter:description" content="Freelance web design, graphics, and photography for artists, makers and small businesses. Mobile first and WordPress sites, custom graphics, and digital photography." />
	<meta name="twitter:image" content="http://www.anchortagdesign.com/linkedin-og-image.png" />
	<link href="https://fonts.googleapis.com/css?family=Neuton:400,400i,700|Share:400,700" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97175852-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-97175852-2');
		</script>
		
	<!-- Google and schema.org markup -->
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "LocalBusiness",
		"description": "Custom Web & Graphic Design",
		"image": [
			"https://www.anchortagdesign.com/images/atd-logo-1x1.png",
			"https://www.anchortagdesign.com/images/atd-logo-4x3.png",
			"https://www.anchortagdesign.com/images/atd-logo-16x9.png"
		],
		"@id": "https://www.anchortagdesign.com/",
		"name": "Anchor Tag Design",
		"address": {
			"@type": "PostalAddress",
			"postOfficeBoxNumber": "11483",
			"addressLocality": "Portland",
			"addressRegion": "OR",
			"postalCode": "97211",
			"addressCountry": "US"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": 45.5585520,
			"longitude": -122.6298890
		},
		"url": "https://www.anchortagdesign.com",
		"telephone": "+15033513640",
		"openingHoursSpecification": [
			{
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": [
					"Monday",
					"Tuesday",
					"Wednesday",
					"Thursday",
					"Friday"
				],
				"opens": "09:00",
				"closes": "18:00"
			},
			{
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": "Saturday",
				"opens": "10:00",
				"closes": "17:00"
			}
		],
		"priceRange": "$$$"
	}
	</script>

	<!-- Bootstrap 4 CDN and Font Awesome! business -->
	<link async rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Stylesheets in the css folder -->
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">

	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Remove link from phone number. -->
	<meta name="format-detection" content="telephone=no">
	
</head>
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
	<?php include 'includes/tools.php'; ?>
	<?php include 'includes/process.php'; ?>
	<?php include 'contact/index.php'; ?>
	<?php include 'includes/footer.php'; ?>

	<script type="text/javascript" src='js/main.js'></script>
	<script src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" defer></script>
</body>
</html>