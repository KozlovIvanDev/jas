<?php include("../includes/config.php"); ?>
<?php include("../includes/header.php"); ?>

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
	
<?php include("../includes/footer.php"); ?>