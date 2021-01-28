<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Database Wast'O</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style5.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading" style="background-color:yellowgreen; color:white">Menu</div>
      <div class="list-group list-group-flush">
        <a href="#dt" class="list-group-item list-group-item-action bg-light"style="color:green"><b>Tanggapan<b></a>
        <a href="#p" class="list-group-item list-group-item-action bg-light"style="color:green"><b>Pemesanan<b></a>
        <a href="#r" class="list-group-item list-group-item-action bg-light"style="color:green"><b>Registrasi<b></a>
        <a href="UpdateData.php" class="list-group-item list-group-item-action bg-light"style="color:green"><b>Update Data User<b></a>
      </div>
    </div>

    <div id="page-content-wrapper" style="background-image:url('img/TesItem3.png'); color:black">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a href="index.php"><img src="img/TulisanLogoPojok.png" width="90" height="30" class="d-inline-block align-top mt-2" alt="" loading="lazy"></a>
            </li>
          </ul>
        </div>
      </nav>

      <section id="dt" class="dt">
      <div class="container-fluid">
        <h1 class="mt-4">Data Tanggapan</h1>
        <table border="1" cellpanding="10" cellspacing="4">
            <tr style="background-color: green;">
                <th>Nama</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Nomer Pos</th>
                <th>Tanggapan Anda</th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM tanggapan";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['kota'] ?></td>
                            <td><?php echo $row['kecamatan'] ?></td>
                            <td><?php echo $row['nomerpos'] ?></td>
                            <td><?php echo $row['tanggapananda'] ?></td>
                    <?php
                        }
                    } else {
                        echo "0 Result";
                    }
            ?>
        </table>
      </div>
    </section>


    <section id="p" class="dpt">
      <div class="container-fluid">
        <h1 class="mt-4">Data Pemesanan</h1>
        <table border = "1" cellpanding="10" cellspacing="4">
            <tr style="background-color: yellow;">
                <th>No ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tanggal Lahir</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Pengambilan Sampah</th>
                <th>Agen Kebersihan</th>
                <th>Provinsi</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Kode Pos</th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM pemesanan";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['noid'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['umur'] ?></td>
                            <td><?php echo $row['ttl'] ?></td>
                            <td><?php echo $row['notelp'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['pengambilansampah'] ?></td>
                            <td><?php echo $row['agenkebersihan'] ?></td>
                            <td><?php echo $row['provinsi'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['kota'] ?></td>
                            <td><?php echo $row['kodepos'] ?></td>

                    <?php
                        }
                    } else {
                        echo "0 Result";
                    }
            ?>
        </table>
      </div>
    </section>


    <section id="r" class="r">
      <div class="container-fluid">
        <h1 class="mt-4">Data Registrasi</h1>
        <table border = "1" cellpanding="10" cellspacing="4">
            <tr style="background-color: blue;">
                <th>No ID</th>
                <th>User Name</th>
                <th>Passowrd</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM user";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['ttl'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>       
                    <?php
                        }
                    } else {
                        echo "0 Result";
                    }
            ?>
        </table>
      </div>
    </section>

    </div>
  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="jquery-ui-1.12.1/jquery-ui.min.css"></script>

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
