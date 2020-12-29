<?php include("../includes/connection.php"); ?>
<?php include("../includes/students_header.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
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
      <meta property="og:image" content="../images/mini-logo.svg"> 

      <title itemprop="name">CheckON | Система для навчального процесу</title> 
      <meta name="description" content="Проект «Електронний журнал | Електронний щоденник» створений для всіх учасників навчального процесу: вчителів, учнів та їх батьків."> 
      <link rel="shortcut icon" href=""> 
      <link rel="canonical" href="">

      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/elements.css"> 
      <link rel="stylesheet" href="../css/base.css"> 
      <link rel="stylesheet" href="../css/layout.css">
      <link rel="stylesheet" href="../css/form.css">
  </head>
  <body>	
    <div class="intropage_container">
      <section id="welcome">
        <div class="teacher">
            <h2>Ваш класний керівник:</h2>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "userlistdb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT full_name, email FROM teachers WHERE id='1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table><tr><th>П.І.Б.</th><th>Електронна пошта</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["full_name"]."</td><td>".$row["email"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            $conn->close();  
          ?>   

        </div>
        
        <a onclick="copy('Це посилання для батьків, вони зможуть підключитися за ним!')" class="parent-link">
            <span>Ваше послання для запрошення батьків: <a href="#">Тут</a></span>
        </a>

        <div class="logout-button">
          <a href="logout.php">Вийти</a> з системи.
        </div>
      </section>
    </div>

    <script>
      function copy(text) {
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
      }
    </script>
  </body>
	
<?php include("../includes/footer.php"); ?>