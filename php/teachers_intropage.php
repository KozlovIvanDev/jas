<?php include("../includes/connection.php"); ?>
<?php include("../includes/teachers_header.php"); ?>

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

      <link rel="stylesheet" href="../css/elements.css"> 
      <link rel="stylesheet" href="../css/base.css"> 
      <link rel="stylesheet" href="../css/layout.css">
      <link rel="stylesheet" href="../css/form.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/intro-page.css">
  </head>
  <body>	

    <div class="intropage_container">
      <section id="class_list" class="intro-sections">
        
        <div class="dropdown">

          <div class="dropdown_button_container">
              <button onclick="myFunction()" class="dropdown_button">Ваші класи</button>
              <img src="../images/down-arrow.svg" class="down-arrow">
          </div>
          
          <div class="dropdown_menu" id="myDropdown">

            <div class="dropdown_menu_section">
              <div class="dropdown_title_container">
                <h4 class="dropdown_title">10-А</h4>
              </div>
            </div>

            <div class="dropdown_menu_section">
              <div class="dropdown_title_container">
                <h4 class="dropdown_title">10-Б</h4>
              </div>
            </div>
          </div>

        </div>

        <div class="diary_container">
          <div class="table1">
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

            $sql = "SELECT id, name_subject, home_work, rating FROM subjects WHERE id BETWEEN 1 AND 4";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table><tr><th>№ класу</th><th>Назва</th><th>Кількість учнів</th><th>Кабінет</th><th>Класний керівник</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name_subject"]."</td><td>".$row["home_work"]."</td><td> ".$row["rating"]."</td></tr>";
              }
              echo "</table>";
            } else {
              echo "0 results";
            }
            $conn->close();  ?> 

          </div>
        </div>
      </section>
    </div> 

    <?php
      //Определяем параметры соединения. 
      $host="localhost";
      $user="root";
      $pass="";
      $db="userlistdb";
      
      //Соединяемся с сервером
      mysqli_connect ($host, $user, $pass);
      
      //Выбираем БД
      //mysqli_select_db ($db);
      $conn = mysqli_connect($host, $user, $pass, $db);
      // Проверяем соединение
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }
      
      echo "Connected successfully";

      //Параметры определены. Соединение состоялось
    ?>

    <table border='1' value="Понеділок">
      <tr>
        <td>ID Уроку</td>
        <td>Домашнє завдання</td>
        <td>Оцінка</td>
      </tr>
      <?php
        $sql = "SELECT `name_subject`, `home_work`, `rating.id` FROM `monday`,`tuerthday`,`wednesday`,`thirthday`, `friday` WHERE `name_subject.id=names_subject_id`";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        while($r = mysqli_fetch_array($result)) {
          echo "<tr><td>{$r['names_subject']}</td><td>{$r['home_work']}</td><td>{$r['rating']}</td></tr>";
        }
      ?>
    </table>
    <?php
      //Оновлення даних таблиці.
      // Спочатку дістаємо дані з таблиці
      if (isset($_POST["home_work"])) {
            //Если это запрос на обновление, то обновляем
            if (isset($_GET['red_id'])) {
                $sql = mysqli_query($conn, "UPDATE `monday`,`tuerthday`,`wednesday`,`thirthday`,`friday` SET `home_work` = '{$_POST['home_work']}',`rating` = '{$_POST['rating']}' WHERE `ID`={$_GET['red_id']}");
            } else {
                //Иначе вставляем данные, подставляя их в запрос
                $sql = mysqli_query($conn, "INSERT INTO `monday`,`tuerthday`,`wednesday`,`thirthday`,`friday` (`home_work`, `rating`) VALUES ('{$_POST['home_work']}', '{$_POST['rating']}')");
            }

            //Если вставка прошла успешно
            if ($sql) {
              echo '<p>Виконано!</p>';
            } else {
              echo '<p>Виникла помилка, зверніться до адміністратора закладу: ' . mysqli_error($conn) . '</p>';
            }
      }

          //Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
          if (isset($_GET['red_id'])) {
            $sql = mysqli_query($conn, "SELECT `id`, `home_work`, `rating` FROM `monday` WHERE `ID`={$_GET['red_id']}");
            $product = mysqli_fetch_array($sql);
          }
    ?>
    <form action="teachers_intropage.php" method="post">
      <table>
        <tr>
          <td>Домашнє завдання:</td>
          <td><input type="text" name="Домашнє завдання" value="<?= isset($_GET['red_id']) ? $product['home_work'] : ''; ?>"></td>
        </tr>
        <tr>
          <td>Оцінка:</td>
          <td><input type="text" name="Оцінка" size="3" value="<?= isset($_GET['red_id']) ? $product['rating'] : ''; ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Надіслати"></td>
        </tr>
      </table>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropdown_button')) {
          var dropdowns = document.getElementsByClassName("dropdown_menu");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>

    <script src="../cookie/load.js"></script>
    <?php include("../includes/footer.php"); ?>
  </body>
</html>
	
<?php include("../includes/footer.php"); ?>