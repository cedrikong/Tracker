<?php 
$mysqli = NEW MySQLI ('localhost', 'root', '', 'crud');

$resultSet = $mysqli->query("SELECT phone FROM crud2");
?>

 <select name="departments">
  <?php
  while($rows = $resultSet->fetch_assoc())
    {
          $phone = $rows['phone'];
          echo "<option value='phone'>$phone</option>";
    }
  ?>
  </select>