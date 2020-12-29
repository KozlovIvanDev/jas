<?php
  session_start();
  if(!isset($_SESSION["session_username"])):
    header("location:login.php");
  else:
?>
<?php include("../includes/config.php"); ?>

<!DOCTYPE html>
<html lang="ua">
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
        <meta property="og:site_name" content="CheckON"> 

        <title itemprop="name">CheckON | Система для навчального процесу</title> 
        <meta name="description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
        <link rel="shortcut icon" href="../images/mini-logo.svg"> 
        <link rel="canonical" href="">

        <link href="../css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/elements.css"> 
        <!--<link rel="stylesheet" href="../css/base.css"> 
        <link rel="stylesheet" href="../css/layout.css"> -->
		<link rel="stylesheet" type="text/css" href="../css/gn-menu/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/gn-menu/component.css" />
    </head>
    <body>	
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <!-- <li class="gn-search-item">
                                    <input placeholder="Search" type="search" class="gn-search">
                                    <a class="gn-icon gn-icon-search"><span>Search</span></a>
                                </li> -->
                                <div class="dropdown_menu_section  t-1">
                            
                                    <div class="dropdown_title_container">
                                        <img src="../images/notebook.svg"class="dropdown_title_icon">
                                        <a class="dropdown_title" href="../php/students_intropage.php">Щоденник</a>
                                    </div>
                                        
                                </div>
                                <div class="dropdown_menu_section  t-1">
                            
                                    <div class="dropdown_title_container">
                                        <img src="../images/user.svg"class="dropdown_title_icon">
                                        <a class="dropdown_title" href="../php/students_user.php">Профіль</a>
                                    </div>
                                        
                                </div>
                                <div class="dropdown_menu_section  t-1">
                            
                                    <div class="dropdown_title_container">
                                        <img src="../images/settings_intro.svg"class="dropdown_title_icon">
                                        <a class="dropdown_title" href="../php/students_settings.php">Налаштування</a>
                                    </div>
                                        
                                </div>
                                <!-- <div class="dropdown_menu_section  t-1">
                            
                                    <div class="dropdown_title_container">
                                        <img src="../images/information.svg"class="dropdown_title_icon">
                                        <a class="dropdown_title" href="../php/students_help.php">Допомога</a>
                                    </div>
                                        
                                </div> -->
                                
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li class="special_nav_item">
                    <h2>Ласкаво просимо, 
                        <span><?php echo $_SESSION['session_username'];?>! </span>
                    </h2>
                </li>
                <li><a class="codrops-icon codrops-icon-prev" href="../index.html"><span>CheckON</span></a></li>
            </ul>
        <script src="../js/gn-menu/classie.js"></script>
        <script src="../js/gn-menu/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
    
    </body>
</html>
<?php endif; ?>