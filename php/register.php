<?php require_once("../includes/connection.php"); ?>

<?php
	
	if(isset($_POST["register"])){
	
		if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

			$full_name= htmlspecialchars($_POST['full_name']);
			$email=htmlspecialchars($_POST['email']);
			$username=htmlspecialchars($_POST['username']);
			$password=htmlspecialchars($_POST['password']);
			$n1=mysqli_connect("localhost","root","","userlistdb");
			$query=mysqli_query($n1,"SELECT * FROM usertbl WHERE username='".$username."'");
			$numrows=mysqli_num_rows($query);

			if($numrows==0){

				$sql="INSERT INTO usertbl(full_name, email, username, password) VALUES ('$full_name','$email', '$username', '$password')";
				$result=mysqli_query($n1,$sql);

				if($result){
					$message = "Account Successfully Created";
				} else {
					$message = "Failed to insert data information!";
				}

			} else {
				$message = "That username already exists! Please try another one!";
			}
		} else {
			$message = "All fields are required!";
		}
	}
?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

    


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
        <meta name="google-site-verification" content="cl3R1OCJUnlj0EQkY-Avlyrhk_ZT_-Qc346IPfFVb10"> 
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">  
        <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">  

        <meta property="og:type" content="website"> 
        <meta property="og:title" content="Електронний журнал | Електронний щоденник - online система для навчального процесу."> 
        <meta property="og:description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
        <meta property="og:url" content=""> 
        <meta property="og:site_name" content="CheckON"> 
        <meta property="og:image" content="../image/mini-logo.svg"> 

         <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <title itemprop="name">Online Learning System | Система для навчального процесу</title> 
        <meta name="description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
        <link rel="shortcut icon" href="../images/mini-logo.svg"> 
        <link rel="canonical" href="">

        <link rel="stylesheet" href="../css/layout.css">
        <link rel="stylesheet" href="../css/elements.css"> 
        <link rel="stylesheet" href="../css/base.css"> 
        <link rel="stylesheet" href="../css/form.css"> 
    </head>
    <body id="body">
        <div class="loader">
            <div class="inner"></div>
        </div>
        <div id="registration_container">
            <div class="intro_form_container">
                <a class="reg_link" href="../index.html"><img class="reg_logo" src="../images/logo.svg" alt=""></a>
                <h2 class="intro_form_heading">Створити аккаунт в CheckON</h2>
                <form action="register.php" method="post" class="intro_form" name="registerform">
                    <!-- <div class="social-icons">
                        <div class="g-signin2 icon icon-gg" data-onsuccess="onSignIn">
                            <img src="../images/search.svg" alt="">
                            <h3>Зареєструватись з Google</h3>
                        </div>
                        <div class="icon icon-fb">
                            <img src="../images/facebook.svg" alt="">
                            <h3>Зареєструватись з Facebook</h3>
                        </div>
                    </div> -->
                    <h3 class="intro_form_subheading">Зареєструйтесь з Email</h3>
                    <div id="login" class="input-group">
                        <div class="txtb">
                            <label for="user_login" class="label">
                                <img src="../images/user.svg" alt="">
                                <input autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="Повне ім'я" id="full_name" name="full_name" type="text" required value="">
                            </label> 
                            
                        </div>

                       <div class="txtb">
                            <label class="label" for="user_pass">
                                <img src="../images/identification.svg" alt="">
                                <input autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="Ім'я користувача" id="username" name="username" type="text" required value="">
                            </label>
                            
						</div>
						
						<div class="txtb">
                            <label class="label" for="user_pass">
                                <img src="../images/email.svg" alt="">
                                <input autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" placeholder="Електронна Адреса" id="email" name="email" type="email" required value="">
                            </label>
                            
                        </div>
                
                        <div class="txtb">
                            <label class="label" for="user_pass">
                                <img src="../images/lock.svg" alt="">
                                <input id="password" name="password" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" type="password" placeholder="Пароль" required="" value="">
                                <span class="eye" onclick="hidePassword()">
                                    <img id="hide" src="../images/eye.svg" alt="">
                                    <img id="hide1" src="../images/eye-closed.svg" alt="" srcset="">
                                </span>
                            </label>
                        </div>
                        <input id="register" name= "register" type="submit" class="submit-btn" value="Долучитися до CheckOn" >
                    </div>
                </form> 
                <h4 class="form_help_link">Вже є аккаунт? <a href="login.php">Увійти</a></h4>   
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
