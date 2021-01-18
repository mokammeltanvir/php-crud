<?php

  $stu_id = $_GET['id'];
  include 'config.php';

  $sql = "DELETE FROM student WHERE id={$stu_id}";
  $result = mysqli_query($conn, $sql) or die("Query Failed");

  header("Location: index.php");
  
  mysqli_close($conn);

?>