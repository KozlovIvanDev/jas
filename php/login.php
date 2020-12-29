<?php
	session_start();
	include("../includes/config.php");
?>
<?php
	
	if(isset($_SESSION["session_username"])){
		// вывод "Session is set"; // в целях проверки
		header("Location: students_intropage.php");
	}

	if(isset($_POST["login"])){

		if(!empty($_POST['username']) && !empty($_POST['password'])) {

			$username = htmlspecialchars($_POST['username']);
			$password = htmlspecialchars($_POST['password']);

			$query = mysqli_query($mysqli, "SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
			$query2 = mysqli_query($mysqli, "SELECT * FROM teachers WHERE username='".$username."' AND password='".$password."'");
			
			$numrows = mysqli_num_rows($query);
			$numrows2 = mysqli_num_rows($query2);

			if($numrows!= 0 || $numrows2!= 0){
				while($row = mysqli_fetch_assoc($query)){
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
				}
				while($row2 = mysqli_fetch_assoc($query2)){
					$dbusername2 = $row2['username'];
					$dbpassword2 = $row2['password'];
				}
				if( $username == $dbusername && $password == $dbpassword){
					// старое место расположения
					$_SESSION['session_username']=$username;	 
					/* Перенаправление браузера */
					header("Location: students_intropage.php");
				}else if($username == $dbusername2 && $password == $dbpassword2){
					$_SESSION['session_username'] = $username;	 
					/* Перенаправление браузера */
					header("Location: teachers_intropage.php");
				}
			
			}else {
				//  $message = "Invalid username or password!";
				
				echo  "Invalid username or password!";
			}
		} else {
			$message = "All fields are required!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CheckON | Система для навчального процесу</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <meta name="google-site-verification" content="cl3R1OCJUnlj0EQkY-Avlyrhk_ZT_-Qc346IPfFVb10"> 
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">  
        <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">  

        <meta property="og:type" content="website"> 
        <meta property="og:title" content="Електронний журнал | Електронний щоденник - online система для навчального процесу."> 
        <meta property="og:description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
        <meta property="og:url" content=""> 
        <meta property="og:site_name" content=""> 
        <meta property="og:image" content=""> 

        <title itemprop="name">CheckON | Система для навчального процесу</title> 
        <meta name="description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
        <link rel="shortcut icon" href="../images/mini-logo.svg"> 

        <link href="../css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/elements.css"> 
		<link rel="stylesheet" href="../css/base.css"> 
		<link rel="stylesheet" href="../css/form.css">
        <link rel="stylesheet" href="../css/layout.css">


    </head>
    <body>	
		<div class="loader">
            <div class="inner"></div>
        </div>
		<div id="registration_container">
			<div id="intro_form_container">
				<a class="reg_link" href="../index.html"><img class="reg_logo" src="../images/logo.svg" alt=""></a>
				<h2 class="intro_form_heading">Увійти в аккаунт CheckON</h2>
				<form action="" id="loginform" method="post" name="loginform" class="intro_form">
					<div id="login" class="input-group">
						<div class="txtb">
							<label for="user_login" class="label">
								<img src="../images/user.svg" alt="">
								<input autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="Повне ім'я" name="username" type="text" required value="">
							</label> 
							
						</div>

						<div class="txtb">
							<label class="label" for="user_pass">
								<img src="../images/lock.svg" alt="">
								<input id="password" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" name="password" type="password" placeholder="Пароль" required="" value="">
								<span class="eye" onclick="hidePassword()">
									<img id="hide" src="../images/eye.svg" alt="">
									<img id="hide1" src="../images/eye-closed.svg" alt="" srcset="">
								</span>
							</label>
						</div>

						<input name="login" type="submit" class="submit-btn" value = "Увійти"/>
					</div>	
				</form>
					<h4 class="form_help_link">Ще немає аккаунта? <a href="register.php">Зареєструватись</a></h4>   
			</div>
		</div>
		<script>
            function hidePassword() {
                var password = document.getElementById("password")
                var hide = document.getElementById("hide")
                var hide1 = document.getElementById("hide1")

                if (password.type === "password") {
                password.type = "text";
                hide.style.display = "block"
                hide1.style.display = "none"
                } else {
                password.type = "password";
                hide.style.display = "none";
                hide1.style.display = "block"
                }
            }
		</script>
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="../js/index.js"></script>
	</body>
</html>
