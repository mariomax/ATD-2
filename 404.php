<?php
header("HTTP/1.0 404 Not Found");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Mario Lopriore" />
  <meta name="description" content="Anchor Tag Design: Independent Web & Graphic Design" />
  
  <title>404: not found</title>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97175852-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-97175852-2');
  </script>

  <!-- Bootstrap 4 CDN and Font Awesome! business -->
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
  <section class="four0four">
    <div class="content">
      <img src="images/404.jpg" alt="404 error image" class="four-img">
      <figcaption>404: found in the Portland Art Museum</figcaption>
      <h1>Whoops!</h1>
      <p><i class="far fa-frown"></i>&nbsp; Sorry. The page you were looking for isn't available or the link to it is broken.</p>
      <button class="return"><a href="https://www.anchortagdesign.com/">Return to Anchor Tag Design</a></button>
    </div>
    <div class="four-footer">
      <?php include 'includes/footer.php'; ?>
    </div>
  </section>

    <script type="text/javascript" src='js/main.js'></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" async></script>
</body>
</html>