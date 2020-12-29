<?php
include("../includes/config.php");
global $db;
$db = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
<?php
function diary($lessons){
    $sql = "SELECT id, name_subject, home_work, rating FROM subjects WHERE id $lessons";
    $result = $db->query($sql);

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
}
diary([1,2,3]);
?>