
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	
    <title><?php echo $title ; ?></title>

    <!-- Bootstrap core CSS -->
	<link href="ui/css/united.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="ui/css/signin.css" rel="stylesheet">
	<script src="ui/js/es6-promise.auto.min.js"></script> <!-- IE support -->
	<script src="ui/js/sweetalert2.js"></script>
	<link rel="stylesheet" href="ui/css/sweetalert2.min.css">
	
	<!-- jQuery 2.2.0 -->
	<script src="ui/js/jQuery-2.2.0.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="ui/js/bootstrap.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!--   <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="auth/login">
        <center>
		<!-- <img src="ui/img/logo.png" class="img-responsive" /> -->
    <h3 class="form-signin-heading "><?php echo $title_login ;?></h3>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
		<br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
		<br/>
        <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
    
     </form>
    <br><b class="text-primary">By <?php echo $copyright ;?></b><b class="pull-right text-primary">&copy <?php echo date('Y') ; ?></b>
    </div> <!-- /container -->
			    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  </body>
</html>
