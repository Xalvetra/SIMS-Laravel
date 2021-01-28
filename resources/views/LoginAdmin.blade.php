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
        <img src="img/WastOProfil.png" width="130" height="130" class="rounded-circle mt-3 md-4 ml-5">
        <div class="Semboyan">
            <p><b>GO</b> Waste <b>GO</b> Stack </p>
        </div>

        <div class="login-main-text">
            <h2><b>Wast'</b><i>O</i><br>Masuk</h2>
            <p>ADMIN ONLY LOGIN</p>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="#proses" method="POST">
                    <div class="form-group">
                        <label>Your ID</label>
                        <input type="text" class="form-control" placeholder="User Name" name="id">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-black" name="login">Login</button>
                </form>
                <br>
                <div class="ml-1">
                 <a href="index.php"><img src="img/HomeButton.png" width="45" height="45"></a> 
                </div>
            </div>
        </div>
    </div>

    <section id="proses" class="proses"> 
    <?php
    include "koneksi.php";
    if(isset($_POST["login"])){

        $id = $_POST['id'];
        $password = $_POST['password'];

        $query="SELECT * FROM admin WHERE id='$id' AND 
        password ='$password'";
        $result = mysqli_query($connect, $query);
        $cektest = mysqli_num_rows($result);

        if($cektest){
            echo "<script>alert('Admin Masuk');history.go(-1); </script>";
            header('Location: DataCek.php');
            } else{
            echo "<script>alert('Gagal Masuk / Anda Bukan Admin');history.go(-1);</script>";
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