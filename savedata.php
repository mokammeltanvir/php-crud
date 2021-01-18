<?php
    $stu_name = $_POST['name'];
    $stu_address = $_POST['address'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['phone'];

  $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

        $sql = "INSERT INTO student(name, address, class, phone) VALUES ('$stu_name', '$stu_address', '$stu_class', '$stu_phone')";
        $result = mysqli_query($conn, $sql) or die("Query failed");

        header("Location: index.php");

        mysqli_close($conn);
  ?>