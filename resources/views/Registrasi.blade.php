<html lang = "en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Register</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Jquery File -->
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.css" />
    <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.js"></script>
    <!-- CSS -->
    <link rel='stylesheet' type='text/css' media='screen' href="style1.css">
    <link rel="stylesheet" id="bootstrap-css"  href="bootstrap/css/bootstrap.min.css" >
        <script type="text/javascript">
            $(function(){
                $("#date_ex").datepicker({ dateFormat: 'yy-mm-dd' });
           });
        </script>
</head>

<body>
    <div class="sidenav container-bg">
        <img src="img/WastOProfil.png" width="130" height="130" class="rounded-circle mt-3 md-4 ml-5">
        <div class="Semboyan">
            <p><b>GO</b> Waste <b>GO</b> Stack </p>
        </div>
        <div class="login-main-text">
            <h2><b>Wast'</b><i>O</i><br>Masuk</h2>
            <p>Login or register from here to access.</p>
        </div>
    </div>

    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="#proses" method="GET">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Id" name="id">
                    </div>
                    <div class="form-group">
                        <label>UserName</label>
                        <input type="text" class="form-control" placeholder="UserName" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir (YYYY-MM-DD)</label>
                        <input type="text" class="form-control" placeholder="Tanggal Lahir" id="ttl" name="ttl">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea cols="20" rows="5" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-black" name="register">Sign In</button>
                    </form>

            <section id="proses" class="proses">
                <?php
                    if(isset($_GET["register"])){
                    include "conn.php";

                    $id=$_GET['id'];
                    $username=$_GET['username'];
                    $password=$_GET['password'];
                    $nama=$_GET['nama'];
                    $ttl=$_GET['ttl'];
                    $alamat=$_GET['alamat'];


                    $sql="INSERT INTO user(id, username, password, nama, ttl, alamat)
                        VALUE('$id', '$username', '$password', '$nama', '$ttl', '$alamat')";

                    if (mysqli_query($connect, $sql)){
                        echo "<script>alert('Anda Berhasil Registrasi');history.go(-1); </script>";
                        header('Location: LoginUserAdmin.php');
                        }else{
                        echo "<script>alert('Gagal Registrasi');history.go(-1);</script>";
                        echo mysqli_error($connect);
                    }

                    mysqli_close($connect);
                    }
                ?>
            </section> 
            </div>
        </div>
    </div>

    <!-- Jquery & Javascript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>