<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login - CodePen</title>

    <link rel="stylesheet" href="logincss/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="checklogin.php" method="POST">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" value="myusername" name="myusername" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password"  value="mypassword" name="mypassword" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>