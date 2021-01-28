<html>
    <title>CheckOut</title>
    <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>

<div class="container wrapper">
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <span class="step step_complete"> <a href="index.php" class="check-bc">Home</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
                        <span class="step step_complete"> <a href="Pemesanan.php" class="check-bc">Pemesanan</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
                    </div>
                </div>
            </div>    
            <div class="row cart-body">
                
                <form class="form-horizontal" method="GET" action="#proses">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <div class="panel panel-info">
                        <div class="panel-heading">Alamat Titik</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Alamat Diisi Sesuai Tempat Anda Sekarang</h4>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <div class="col-md-12"><strong>Provinsi</strong></div>
                                <div class="col-md-12">
                                    <select id="provinsi" name="provinsi" class="form-control">
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Alamat</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="alamat" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <strong>Kota</strong>
                                </div>
                                <div class="col-md-6">
                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;Kode Pos</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="kota">
                                        <option value="">Kota</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Kediri">Kediri</option>
                                        <option value="Kudus">Kudus</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Purwakarta">Purwakarta</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Denpasar">Denpasar</option>
                                        <option value="Gianyar">Gianyar</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="col-md-12"><input type="text" class="form-control" name="kodepos" value="" placeholder="nomer 5 digit" /></div>
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix" name="booking"> ~ Booking ~</button>
                                </div>
                            </div>
                         </div>
                         </div>
                         </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">DATA DIRI</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4<b>NB: DIIISI SESUAI DENGAN ANDA</b></h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>No ID</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="noid" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-xs-12">
                                    <strong>Nama</strong>
                                    <input type="text" class="form-control" name="nama"  value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Umur</strong></div>
                                <div class="col-md-12">
                                    <input type="text"  class="form-control" name="umur" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"
                                ><strong>Tanggal Lahir (YYYY-MM-DD)</strong></div>
                                <div class="col-md-12">
                                    <input type="text"  class="form-control" name="ttl" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>No Telepon</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="notelp" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email Anda</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="email" value="" /></div>
                            </div>
                            
                            <div class="form-group">
                            <div class="col-md-6">
                                    <strong>Pengambilan Sampah</strong>
                                </div>
                                <div class="col-md-6">
                                    <strong>Agen Kebersihan</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="pengambilansampah">
                                        <option value="">Pilih 1</option>
                                        <option value="1x">1x Pengambilan</option>
                                        <option value="2x">2x Pengambilan</option>
                                        <option value="3x">3x Pengambilan</option>
                                    </select>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="agenkebersihan">
                                        <option value="">Pilih 1</option>
                                        <option value="2 in 1">2 in 1</option>
                                        <option value="3 in 1">3 in 1</option>
                                        <option value="4 in 1">4 in 1</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--SHIPPING METHOD END-->
                </form>
                <section id="proses" class="proses">
                <?php
                if(isset($_GET["booking"])){

                    include "koneksi.php";
                    
                    $noid=$_GET['noid'];
                    $nama=$_GET['nama'];
                    $umur=$_GET['umur'];
                    $ttl=$_GET['ttl'];
                    $notelp=$_GET['notelp'];
                    $email=$_GET['email'];
                    $pengambilansampah=$_GET['pengambilansampah'];
                    $agenkebersihan=$_GET['agenkebersihan'];
                    $provinsi=$_GET['provinsi'];
                    $alamat=$_GET['alamat'];
                    $kota=$_GET['kota'];
                    $kodepos=$_GET['kodepos'];
                    
                    $sql="INSERT INTO pemesanan(noid, nama,umur,ttl,notelp,email,pengambilansampah,agenkebersihan, provinsi, alamat, kota, kodepos)
                        VALUE('$noid','$nama','$umur','$ttl','$notelp','$email','$pengambilansampah','$agenkebersihan','$provinsi','$alamat','$kota', '$kodepos')";


                    if (mysqli_query($connect, $sql)){
                        echo "<script>alert('Anda Berhasil Membooking');history.go(-1); </script>";
                        header('Location: Pemesanan.php');
                        } else{
                        echo "<script>alert('Gagal Booking ada yang Kosong');history.go(-1);</script>";
                        echo mysqli_error($connect);
                    }
                    mysqli_close($connect);
                }
                    ?>
                </section>
            </div>
            <div class="row cart-footer">
        </div>
    </div>
    </body>
</html>