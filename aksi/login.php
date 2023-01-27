<?php
include 'database.php';

$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tb_user 
                        WHERE email_user = '$email' AND password_user = '$password'";
$query_sql2 = "SELECT * FROM tb_admin 
                        WHERE email_admin = '$email' AND password_admin = '$password'";

$result = mysqli_query($conn, $query_sql);
$result2 = mysqli_query($conn, $query_sql2);

if(mysqli_num_rows($result) > 0){
    echo "<script>alert('Anda Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../index.php'>";
}else if(mysqli_num_rows($result2) > 0){
    echo "<script>alert('Admin Berhasil Login')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../listuser.php'>";
}else{
    echo "<script>alert('Username atau Password Salah')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../login.php'>";
}
?>