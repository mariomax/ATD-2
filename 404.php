<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'includes/head.php'; ?>
    <title>Anchor Tag Design: Error 404</title>
  </head>
  <body>
    <section class="four0four">
      <div class="content">
        <img src="images/404.jpg" alt="404 error image" class="four-img">
        <figcaption>404 from the Portland Art Museum</figcaption>
        <h1>Whoops!</h1>
        <p><i class="far fa-frown"></i>&nbsp; Sorry. The page you were looking for isn't available or the link to it is broken.</p>
        <button class="return"><a href="https://www.anchortagdesign.com/">Return to the site</a></button>
      </div>
      <div class="four-footer">
        <?php include 'includes/footer.php'; ?>
      </div>

      <!-- From http://www.404errorpages.com/ -->
      <!-- Sends an email when a user hits the 404 page. -->
      <?php
        $ip = getenv ("REMOTE_ADDR");
        $requri = getenv ("REQUEST_URI");
        $servname = getenv ("SERVER_NAME");
        $combine = $ip . " tried to load " . $servname . $requri ;
        $httpref = getenv ("HTTP_REFERER");
        $httpagent = getenv ("HTTP_USER_AGENT");
        date_default_timezone_set('America/Los_Angeles');
        $today = date("D M j Y g:i:s a T");
        $note = "Someone found the 404 error page!";
        
  // Yes, the tabbing is messed up, but it displays nicely in the email.
  $message2 = "$today \n
  $combine \n
  User Agent = $httpagent \n
  $note \n
  $httpref ";

        $to = "mario@anchortagdesign.com";
        $subject = "ATD Error Page";
        $from = "From: mario@anchortagdesign.com\r\n";

        mail($to, $subject, $message2, $from);
      ?>
    </section>

      <script type="text/javascript" src='js/main.js'></script>
      <script src="//cdn.jsdelivr.net/jquery.lazyloadxt/1.0.0/jquery.lazyloadxt.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" async></script>
  </body>
</html>