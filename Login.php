<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="theme/login/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<a href="index.php"><img src="images/logos/logo.png"></a>
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="images/avatar.png">
				<h2 class="title">تسجيل الدخول</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>البريد الإلكتروني</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>كلمة المرور</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">نسيت كلمة المرور ؟</a>
            	<input type="submit" class="btn" value="Login">
				<div class="inscription">
				<a  href="#"> <i class="fas fa-user-plus"></i> فتح حساب جديد</a>
				<a  href="index.php"><span><i class="fas fa-home"></i>&ensp;العودة للصفحة الرئيسية</span></a>
				</div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
