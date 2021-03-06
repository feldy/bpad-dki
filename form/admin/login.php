<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

   	<link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../lib/css/animate.css" rel="stylesheet">
    <link href="../../lib/css/style.css" rel="stylesheet">

     <!-- Mainly scripts -->
    <script src="../../lib/js/jquery-2.1.1.js"></script>
    <script src="../../lib/js/bootstrap.min.js"></script>

</head>

<body class="gray-bg">
	<div class="middle-box text-center loginscreen  animated fadeInDown">
		<div>
		    <div>

		        <h1 class="logo-name"><img src="../../images/logo.png" class="img-responsive"></h1>

		    </div>
		    <h3>Welcome to Dispusip DKI Jakarta</h3>
		    <p>Aplikasi | Dosir Arsip DKI Jakarta</p>
		    <form method="post" class="m-t" role="form" action="../../system/login_security.php">
		        <div class="form-group">
		            <input type="text" name="username" class="form-control" placeholder="Username" required="">
		        </div>
		        <div class="form-group">
		            <input type="password" name="password" class="form-control" placeholder="Password" required="">
		        </div>
		        <button type="submit" name="btn_login" class="btn btn-primary block full-width m-b">Login</button>
		    </form>
		    <!-- <button type="submit" name="btn_daftar" class="btn btn-primary block full-width m-b">Daftar Baru</button> -->
		    <p class="m-t"> <small><i class="fa fa-google"></i> Dispusip DKI Jakarta &copy; 2017</small> </p>
		</div>
	</div>
</body>
</hmtl>