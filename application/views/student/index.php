<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Graduation Design</title>
    <!--<meta content='lab2023' name='author'>-->
    <meta content='' name='description'>
    <meta content='' name='keywords'>

    <link href="<?=$base_url?>Bishe/user_guide/_static/css/application-a07755f5.css" rel="stylesheet" type="text/css"
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />-->
    
  </head>
  
  <body class='login'>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <div class='logo-icon'>
                <i class='icon-user'></i>
              </div>
              <!--Hierapolis-->
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
        	
          <form action="<?=$base_url?>BiShe/index.php/GDindex/dealLogin" method="post">
            <fieldset class='text-center'>
              <legend>Login to your account</legend>
              <div class='form-group'>
                <input class='form-control' placeholder='ID' type='text' name="id">
              </div>
              <div class='form-group'>
                <input class='form-control' placeholder='Password' type='password' name="password">
              </div>
              <div class='text-center'>
                <!--<div class='checkbox'>
                  <label>
                    <input type='checkbox'>
                    Remember password
                  </label>
                </div>-->
<!--                <a class="btn btn-default" href="dashboard.php">Sign in</a>-->
                <input type="submit" value="Sign in">
                <br>
                <!--<a href="forgot_password.html">Forgot password?</a>-->
              </div>
            </fieldset>
          </form>
          
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
  <script src="<?= base_url ?>bishe/user_guide/_static/js/jquery.js" type="text/javascript"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
    <script src="<?=base_url?>bishe/user_guide/_static/js/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
