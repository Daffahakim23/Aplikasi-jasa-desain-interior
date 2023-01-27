<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $nama_pemesan = $_POST['nama_pemesan'];
    $nomer_hp = $_POST['nomer_hp'];
    $email = $_POST['email'];
    $jenis = $_POST['jenis'];
    $sql = "INSERT INTO tb_pemesanan (nama_pemesan, nomer_hp, email, jenis) 
            VALUES ('".$nama_pemesan."', '".$nomer_hp."', '".$email."',  '".$jenis."')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Berhasil menambahkan pemesanan')</script>";
      header('Location: ../index.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>