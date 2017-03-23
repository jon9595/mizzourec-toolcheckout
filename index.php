<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>MizzouRec Tool Checkout</title>
    <meta name-"viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class = "navbar-brand" href="http://www.mizzourec.com/"></a>
          </div>
        </div>
      </div>
      <div class="container" id="content">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to access Tool Checkout</h1>
            <div class="account-wall">
              <form class="form-signin" action="php/auth/login.php" method="post">
                <div class="input-group margin-bottom-sm">
                  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                </div>
                <div class="input-group margin-bottom-sm">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-lg btn-golden btn-block">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
