<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $email = $_POST['email_user'];
    $password = $_POST['password_user'];
    $sql = "INSERT INTO tb_user (email_user, password_user)VALUES ('".$email."', '".md5($password)."')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Berhasil tambahkan Akun')</script>";
      header('Location: ../login.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>