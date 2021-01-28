<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $query = "DELETE FROM user WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Data Telah Dihapus');history.go(-1); </script>";
        header('Location: UpdateData.php');
        } else {
        echo "<script>alert('Gagal Mengahapus Data User');history.go(-1);</script>";
        echo mysqli_error($connect);
        }
 ?>