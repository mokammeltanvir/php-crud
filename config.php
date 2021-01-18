<?php
  $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

        $sql = "SELECT * FROM student JOIN studentclass WHERE student.class = studentclass.cid";
        $result = mysqli_query($conn, $sql) or die("Query failed");

?>