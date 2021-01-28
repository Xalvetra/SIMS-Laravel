<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS File -->
    <link rel='stylesheet' type='text/css' media='screen' href="style1.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
    <section>
    <div class="sidenav container-bg">
    <div class="row ">
    <div class="col-md text-justify ml-2 ">
    <img src="img/WastOProfil.png" width="130" height="130" class="rounded-circle mt-3 md-4 ml-5">
             
    </div>
    <div class="col-md ml-5 mr-4 pt-5 mt-2 ">
    <a href="index.php"><img src="img/HomeButton.png" width="55" height="55 " href="Home.php"></a>\
    <p><b>HOME</b></p>
    </div>
    </div>

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
                <form action="#proses" method="POST">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-black" name="login">Login</button>
                </form>
                <br>
                <a href="Registrasi.php"><button type="submit" class="btn btn-secondary" >Sign In</button></a>
            </div>
        </div>
    </div>

    <section id="proses" class="proses"> 
    <?php
    include "koneksi.php";
    if(isset($_POST["login"])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query="SELECT * FROM user WHERE username='$username' AND 
        password ='$password'";
        $result = mysqli_query($connect, $query);
        $cektest = mysqli_num_rows($result);

        if($cektest){
            echo "<script>alert('Anda Berhasil Login');history.go(-1); </script>";
            header('Location: Pemesanan.php');
            } else{
            echo "<script>alert('Gagal Login');history.go(-1);</script>";
            echo mysqli_error($connect);
         }
      mysqli_close($connect);
    }
    ?>
    </section>
    <!-- Jquery & Javascript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.css"></script>
</body>

</html>