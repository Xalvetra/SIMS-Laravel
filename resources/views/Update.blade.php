<html>
<head></head>
<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    ?>

<form action="#up" method="GET">
        <table>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" value="<?php echo $row['id']; ?>">  </td>
                </tr>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" value="<?php echo $row['username']; ?>">  </td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="text" name="password" value="<?php echo $row['password']; ?>">  </td>
                </tr>
                <tr>
                    <td>Nama: </td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>">  </td>
                </tr>
                <tr>
                    <td>TL : </td>
                    <td><input type="text" name="ttl" value="<?php echo $row['ttl']; ?>">  </td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><textarea name="alamat" cols="20" rows="5"><?php echo $row['alamat']; ?></textarea>  </td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
        </table>
    <?php
    }
    ?>
    </form>

    <section id="up" class="up">
      <?php
          if(isset($_GET["simpan"])){
            include "koneksi.php";

            $id=$_GET['id'];
            $username=$_GET['username'];
            $password=$_GET['password'];
            $nama=$_GET['nama'];
            $ttl=$_GET['ttl'];
            $alamat=$_GET['alamat'];

            $query = "UPDATE user SET username='$username', password='$password',nama='$nama', ttl='$ttl' ,alamat='$alamat' WHERE id='$id'";
            $result = mysqli_query($connect, $query);

            if ($result) {
                echo "<script>alert('Telah Mengupdate Data User');history.go(-1); </script>";
                header('Location: UpdateData.php');

                } else{
                echo "<script>alert('Gagal Mengupdate Data User');history.go(-1); </script>";
                echo mysqli_error($connect);
                }
        }
       ?>
      </section>
</body>
</html>