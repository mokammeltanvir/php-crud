<?php
      $stu_id = $_POST['id'];
      $stu_name = $_POST['name'];
      $stu_address = $_POST['address'];
      $stu_class = $_POST['class'];
      $stu_phone = $_POST['phone'];

      $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

      $sql = "UPDATE student SET name = '{$stu_name}', address = '{$stu_address}', class = '{$stu_class}', phone = '{$stu_phone}' WHERE id = {$stu_id}";
      $result = mysqli_query($conn, $sql) or die("Query failed");

      header("Location: index.php");

      mysqli_close($conn);
?>