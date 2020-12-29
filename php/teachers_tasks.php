<?php include("../includes/config.php"); ?>
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

      <!-- <link rel="stylesheet" href="../css/vanilla-calendar.css"> -->

      <link href="../css/style.css" rel="stylesheet">

      <link rel="stylesheet" href="../css/elements.css"> 
      <link rel="stylesheet" href="../css/base.css"> 
      <link rel="stylesheet" href="../css/layout.css">
      <link rel="stylesheet" href="../css/form.css">
  </head>
  <body>	

    <div class="intropage_container">
      <section id="welcome">

        <div class="table">

          <h2 class="table_heading">Електронний щоденник <?php echo $_SESSION['session_username'];?>:</h2>
          
          <div class="show_date">
            <div class="date_container">
              <span id="StartOfTheWeek"></span> - <span id="EndOfTheWeek"></span>
            </div>
          </div>

          <!-- <div class="content">
            <div id="myCalendar" class="vanilla-calendar" style="margin-bottom: 20px"></div>
          </div> -->

          <div class="table_container">
            <div class="table1">
              <p>Понеділок</p>
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
              <p>Вівторок</p>
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
              <p>Середа</p>

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
              <p>Четвер</p>
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
              <p>П'ятниця</p>
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

    // const ShowCalendar = () => {
    //   const show_date = document.querySelector('.show_date');
    //   const calendar = document.querySelector('#myCalendar');
    //   show_date.addEventListener('click', () => {
    //     calendar.classList.toggle('show_calendar');
    //   })
    // }
    // ShowCalendar();
    //////////////////////////////
    </script>

    <!-- <script>
      const pastDates = true, availableDates = false, availableWeekDays = false
      
      const calendar = new VanillaCalendar({
          selector: "#myCalendar",
          months = [
            "Січень",
            "Лютий",
            "Березень",
            "Квітень",
            "Травень",
            "Червень",
            "Липень",
            "Серпень",
            "Вересень",
            "Жовтень",
            "Листопад",
            "Грудень",
          ];
          shortWeekday: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          onSelect: (data, elem) => {
              console.log(data, elem)
          }
      })
      
      const btnPastDates = document.querySelector('[name=pastDates]')
      btnPastDates.addEventListener('click', () => {
          pastDates = !pastDates
          calendar.set({pastDates: pastDates})
          btnPastDates.innerText = `${(pastDates ? 'Disable' : 'Enable')} past dates`
      })
      
      const btnAvailableDates = document.querySelector('[name=availableDates]')
      btnAvailableDates.addEventListener('click', () => {
          availableDates = !availableDates
          btnAvailableDates.innerText = `${(availableDates ? 'Clear available dates' : 'Set available dates')}`
          if (!availableDates) {
              calendar.set({availableDates: [], datesFilter: false})
              return
          }
          const dates = () => {
              const result = []
              for (const i = 1; i < 15; ++i) {
                  if (i % 2) continue
                  const date = new Date(new Date().getTime() + (60 * 60 * 24 * 1000) * i)
                  result.push({date: `${String(date.getFullYear())}-${String(date.getMonth() + 1).padStart(2, 0)}-${String(date.getDate()).padStart(2, 0)}`})
              }
              return result
          }
          calendar.set({availableDates: dates(), availableWeekDays: [], datesFilter: true})
      })
      
      const btnAvailableWeekDays = document.querySelector('[name=availableWeekDays]')
      btnAvailableWeekDays.addEventListener('click', () => {
          availableWeekDays = !availableWeekDays
          btnAvailableWeekDays.innerText = `${(availableWeekDays ? 'Clear available weekdays' : 'Set available weekdays')}`
          if (!availableWeekDays) {
              calendar.set({availableWeekDays: [], datesFilter: false})
              return
          }
          const days = [{
              day: 'monday'
          }, {
              day: 'tuesday'
          }, {
              day: 'wednesday'
          }, {
              day: 'friday'
          }]
          calendar.set({availableWeekDays: days, availableDates: [], datesFilter: true})
      })
    </script>
    <script src="../js/vanilla-calendar-min.js"></script>
    <script src="../js/vanilla-calendar.js"></script> -->
  </body>
</html>
	
<?php include("../includes/footer.php"); ?>