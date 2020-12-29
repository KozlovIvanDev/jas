<?php include("../includes/connection.php"); ?>
<?php include("../includes/students_header.php"); ?>

<!DOCTYPE html>
<html lang="ua">
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
      <section id="diary" class="intro-sections">

        <h2 class="section-intro_heading">Електронний щоденник <?php echo $_SESSION['session_username'];?>:</h2>
        
        <div class="show_date">
          <div class="date_container">
            <span id="StartOfTheWeek"></span> - <span id="EndOfTheWeek"></span>
          </div>
        </div>

        <div class="diary_container">
          <div class="table1">
            <p class="table_day-heading">Понеділок</p>
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
              echo "<table><tr><th>ID уроку</th><th>Предмет</th><th>Домашнє завдання</th><th>   Оцінка</th></tr>";
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

          <div class="table2">
            <p class="table_day-heading">Вівторок</p>
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

            $sql = "SELECT id, name_subject, home_work, rating FROM subjects WHERE id BETWEEN 3 AND 6";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table><tr><th>ID уроку</th><th>Предмет</th><th>Домашнє завдання</th><th>   Оцінка</th></tr>";
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


          <div class="table3">
            <p class="table_day-heading">Середа</p>

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

              $sql = "SELECT id, name_subject, home_work, rating FROM subjects WHERE id IN (2,5,3,9)";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                echo "<table><tr><th> ID уроку</th><th>Предмет</th><th>Домашнє завдання</th><th>   Оцінка</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>".$row["id"]."</td><td>".$row["name_subject"]."</td><td>".$row["home_work"]."</td><td> ".$row["rating"]."</td></tr>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              $conn->close();  
            ?> 

          </div>

          <div class="table4">        
            <p class="table_day-heading">Четвер</p>
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

            $sql = "SELECT id, name_subject, home_work, rating FROM subjects  WHERE id IN (1,4,6,7)";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              echo "<table><tr><th>ID уроку</th><th>Предмет</th><th>Домашнє завдання</th><th>   Оцінка</th></tr>";
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

          <div class="table5">
            <p class="table_day-heading">П'ятниця</p>
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

              $sql = "SELECT id, name_subject, home_work, rating FROM subjects  WHERE id IN (5,7,10,9)";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                echo "<table><tr><th>ID уроку</th><th>Предмет</th><th>Домашнє завдання</th><th>   Оцінка</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<tr><td>".$row["id"]."</td><td>".$row["name_subject"]."</td><td>".$row["home_work"]."</td><td> ".$row["rating"]."</td></tr>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              $conn->close();  
            ?> 
          </div>
        </div>
      </section>

      <section id="subjects" class="intro-sections">

        <h2 class="section-intro_heading">Список предметів</h2>
            
        <ul class="table-list">
          <li class="table-list-item active-item" data-filter="all">Усі</li>
            <span class="slash">/</span>
          <li class="table-list-item" data-filter="math">Точні</li>
            <span class="slash">/</span>
          <li class="table-list-item" data-filter="nature">Природничі</li>
            <span class="slash">/</span>
          <li class="table-list-item" data-filter="lang">Гуманітарні</li>
        </ul>

        <div class="tables_container">
          
          <div class="tables filter math">

            <div class="tables_header">
              <h2 class="tables_heading">Алгебра</h2>
              <h3 class="tables_subheading">Бойко Олена Григорівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter math">

            <div class="tables_header">
              <h2 class="tables_heading">Геометрія</h2>
              <h3 class="tables_subheading">Бойко Олена Григорівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Англійська мова</h2>
              <h3 class="tables_subheading">Смажелюк Лариса Іванівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter math">

            <div class="tables_header">
              <h2 class="tables_heading">Інформатика</h2>
              <h3 class="tables_subheading">Ходов Олександр Валерійович</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Історія України</h2>
              <h3 class="tables_subheading">Паньків Галина Генріхівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Всесвітня Історія</h2>
              <h3 class="tables_subheading">Паньків Галина Генріхівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Українська література</h2>
              <h3 class="tables_subheading">Курасова Ірина Федорівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Українська мова</h2>
              <h3 class="tables_subheading">Курасова Ірина Федорівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter">

            <div class="tables_header">
              <h2 class="tables_heading">Захист України</h2>
              <h3 class="tables_subheading">Суздал Анатолій</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Громадянська освіта</h2>
              <h3 class="tables_subheading">Паньків Галина Генріхівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter lang">

            <div class="tables_header">
              <h2 class="tables_heading">Зарубіжна література</h2>
              <h3 class="tables_subheading">Коваль Любов Андріївна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter nature">

            <div class="tables_header">
              <h2 class="tables_heading">Географія</h2>
              <h3 class="tables_subheading">бобко Жанна Петрівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter math">

            <div class="tables_header">
              <h2 class="tables_heading">Фізика</h2>
              <h3 class="tables_subheading">Ходов Олександр Валерійович</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter nature">

            <div class="tables_header">
              <h2 class="tables_heading">Біологія</h2>
              <h3 class="tables_subheading">Ладан Ольга Петрівна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>

          <div class="tables filter nature">

            <div class="tables_header">
              <h2 class="tables_heading">Хімія</h2>
              <h3 class="tables_subheading">Давидян Яна Аркадіївна</h3>
            </div>

            <div class="tables_body_count">
              <h3 class="tables_body_tasks">Виконаних завдань: <span><div class="current_tasks">4</div> / <div class="tasks_sum">5</div></span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
              <h3 class="tables_body_tasks">Нових повідомлень: <span><div class="current_messages">0</div> </span> <img src="../images/right-arrow.svg" alt="" class="tables_button_icon hidden_arrow"></h3>
            </div>
            
            <div class="tables_button_group">

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/statistics.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Переглянути статистику курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/chat.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Відкрити чат з вчителем курсу</span>
              </div>

              <div class="tooltip">
                <div class="table-button">
                  <a href="" class="tables_button">
                    <img src="../images/share.svg" alt="" class="tables_button_icon">
                  </a>
                </div>

                <span class="tooltiptext">Поділитись посиланням курсу</span>
              </div>

            </div>
          </div>
          
        </div>
      </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
      //////////////////////////////
       (() => {
         function startOfWeek(date){
             const diff = date.getDate() - date.getDay() + (date.getDay() === 0 ? -6 : 1);

             return new Date(date.setDate(diff));
         }

       function endOfWeek(date){
            
             const lastday = date.getDate() - (date.getDay() - 1) + 6;

             return new Date(date.setDate(lastday));
         }
         dt = new Date();
         startDate = startOfWeek(dt).toString().split(' ').slice(0, 3).join(' ');
         endDate = endOfWeek(dt).toString().split(' ').slice(0, 3).join(' ');
         document.getElementById("StartOfTheWeek").innerHTML = startDate;
         document.getElementById("EndOfTheWeek").innerHTML = endDate;
       })();

      $('.table-list-item').click(function() {

        $(this).addClass('current').siblings().removeClass('current');

        let value = $(this).attr('data-filter');
        if(value === 'all') {
          $('.filter').show(750);
        } else {
          $('.filter').not('.' + value).hide(200);
          $('.filter').filter('.' + value).show(400);
        }
      });

      $('.gallery-list-item').click(function() {
        $(this).addClass('active-item').siblings().removeClass('active-item');
      })
    </script>

    
  </body>
</html>
	
<?php include("../includes/footer.php"); ?>