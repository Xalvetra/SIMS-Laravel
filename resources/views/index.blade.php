<!DOCTYPE html>
<html>

<head>
    <!-- Setting VSCode -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <!-- Mobile Ratio -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Title -->
    <title>Wast'O</title>
    
</head>

<body class="mt-4">
    <!-- Navigasi Menu -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-success bg-success info-section text-white bg-right bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/WastOProfil.png" width="35" height="35" class="d-inline-block align-top rounded-circle mt-3" alt="" loading="lazy">
                <img src="img/TulisanLogoPojok.png" width="90" height="30" class="d-inline-block align-top mt-3" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav pb-3.5 ml-3">
                    <a class="nav-link active" href="#Beranda">Beranda<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#LatarBelakang">Latar Belakang</a>
                    <a class="nav-link" href="#Produk">Produk</a>
                    <a class="nav-link" href="#Lokasi">Lokasi</a>
                    <a class="nav-link" href="#tanggapan">Tanggapan Anda</a>
                    
                </div>

            </div>
            <div class="ml-6">
                <a href="LoginUserAdmin.php"><img src="img/AvatarLogin.png" width="35" height="35 "></a>
                <a href="LoginAdmin.php"><img src="img/AdminLogin.png" width="55" height="55 "></a>
            </div>
        </div>
    </nav>


    <!-- Section Home -->
    <section id="Beranda">
        <div class="jumbotron jumbotron-fluid" bg img>
            <div class="container text-center">
                <img src="img/WastOProfil.png" width="25%" height="25%" class="rounded-circle">
                <h1 class="display-4">Sistem Informasi <b>Manajemen Sampah</b></h1>
                <p class="lead">Go Waste Go Stack</p>
            </div>
        </div>
    </section>

    <!-- Section Latar Belakang -->
    <section id="LatarBelakang" class="LatarBelakang">
        <div class="container-LatarBelakang">
            <div class="container bg-white rounded-bottom">
                <div class=" row mb-4 ">
                    <div class="col-md text-center ">
                        <h1>Latar Belakang</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md text-justify ">
                        <img src="img/LatarBelakangImg.png " width="90% " class="col-md ">
                        <p> WastO' adalah sebuah perangkat lunak yang memanajemen sampah di lingkungan masyarakatmaupun kota atau provinsi, yang mana penggunaan sistem ini diprioritaskan untuk masyarakat terkait mengenai hal pencegahan pencemaran lingkungan.
                            Program ini dirancang dalam bahasa pemrograman Java, yang mana program meliputi konektivitas internet dan sistem informasi terdistribusi yang berakar dan diolah oleh server pusat.Solusi Pemantauan Sampah menggabungkan Sensor
                            Cerdas, Sistem Pengelolaan Sampah Cerdas, dan Aplikasi Warga. Sensor Cerdas menggunakan teknologi ultrasound untuk mengukur tingkat pengisian di tempat sampah dan wadah dan mengirim data ke Sistem Manajemen Limbah Cerdas, platform
                            berbasis cloud yang kuat, melalui Internet of Things (Sigfox, NB-IoT, LoRaWAN, GPRS) yang menyediakan kota dan bisnis dengan pengambilan keputusan berdasarkan data, dan pengoptimalan rute pengumpulan sampah, frekuensi, dan
                            muatan kendaraan.</p>
                    </div>
                    <div class="col-md text-justify ">
                        <p> Permasalahan sampah menjadi masalah yang belum terselesaikan dengan baik, khususnya di berbagai daerah di Indonesia. Bertambahnya jumlah penduduk dikota-kota besar berbanding lurus dengan produksi sampah yang dihasilkan. Jika proses
                            pengangkutan sampah tidak ditangani dengan baik maka akan menyebabkan penumpukan sampah. Sudah semestinya pengelolaan sampah harus semakin diperhatikan karena berhubungan dengan efisiensi biaya serta dampak terhadap kualitas
                            lingkungan. Dengan semakin berkembangnya teknologi, khususnya teknologi informasi, perlu kiranya memanfaatkan teknologi tersebut untuk mengatasu permasalah sampah. Pembuatan teknologi smart waste management system ini dibangun
                            dengan menggunakan teknologi Internet of Things dalam mengumpulkan data data sampah serta teknologi berbabasis Kecerdasan Buatan dalam pengolahan data. Integrasi kedua teknogi tersebut dipergunakan untuk memberikan sebuah usulan
                            penanganan sampah dari mulai penentuan tempat pembuangan sampah semantara (TPS), armada angkut sampah sampai ke penjadwalan pengangkutan sampah. Penanganan sampah dilakkan optimasi sehingga diperoleh efisiensi dan efektifias
                            dalam penanganan sampah perkotaan.
                        </p>
                        <img src="img/LatarBelakangImg2.png " width="100% " class="col-md ">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Produk -->
    <section id="Produk" class="produk bg-light pb-4 ">
        <div class="container-Produk" width="700px" height="500px">
            <div class="container">
                <div class="row mt-4 mb-4 ">
                    <div class="col text-center bg-white rounded-pill">
                        <h1>Produk Layanan Kami</h1>
                    </div>
                </div>
                <div class="row mb-4 ">
                    <div class="col-md ">
                        <div class="card ">
                            <img src="img/Item1.jpg " class="card-img-top">
                            <div class=" card-body ">
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                    <h5>DAUR ULANG</h5>
                                </div>
                                <p class="card-text ">langkah memberikan kesempatan kedua untuk berbagai produk bekas agar bisa menjadi produk baru. Dengan demikian, produk dari hasil daur ulang tersebut bisa dimanfaatkan kembali dan tidakmenjadi sampah yang mencemari lingkungan.
                                </p>
                                <a href="Recycle.html" class="btn btn-primary ">Go Recycle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md ">
                        <div class="card ">
                            <img src="img/Item2.jpg " class="card-img-top">
                            <div class="card-body ">
                                <h5 class="card-title ">Pengolahan Sampah</h5>
                                <p class="card-text ">Pengolahan sampah merupakan kegiatan yang dimaksudkan untuk mengurangi jumlah sampah, disamping memanfaatkan nilai yang masih terkandung dalam sampah itu sendiri pengomposan, recycling/daur ulang, pembakaran (insinersi).
                                </p>
                                <a href="Pengolahan.html" class="btn btn-primary ">Ayo Olah!</a>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md ">
                            <div class="card ">
                                <img src="img/Item3.jpg" class="card-img-top">
                                <div class="card-body ">
                                    <h5 class="card-title ">Agen Kebersihan</h5>
                                    <p class="card-text ">Layanan kebersihan yang dapat Anda gunakan di rumah, kantor, apartemen, atau kost-kostan. Layanan ini sekarang sedang menjadi layanan yang cukup banyak digunakan di perkotaan dan praktis bila Asisten RA sedang Mudik</p>
                                    <a href="Agen.html" class="btn btn-primary ">Yuk Bersih!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md ">
                            <div class="card ">
                                <img src="img/Item4.jpg" class="card-img-top">
                                <div class=" card-body ">
                                    <h5 class="card-title ">Pemanggilan Sampah</h5>
                                    <p class="card-text ">Apakah Anda membuang-buang uang untuk pangambilan sampah yang tidak efisien? Apakah tempat sampah Anda selalu dipenuhi sampah? Jika ini tidak terdengar asing, Anda bisa mendapatkan keuntungan dari Sistem Wast'O ini.</p>
                                    <a href="Pemanggilan.html" class="btn btn-primary ">Call Me!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section Lokasi -->
    <section id="Lokasi" class="Lokasi">
        <div class="container-Lokasi">
            <div class="container ">
                <div class="row mt-4 mb-4 ">
                    <div class="col-md text-center ">
                        <h1>Lokasi Kami</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 ">
                        <div class="card text-white bg-primary mb-3 ">
                            <div class="card-body ">
                                <h5 class="card-title text-center ">ALAMAT</h5>
                                <p class="card-text "><b>Jam Operasional :</b> <br>Senin – Jumat, 10:00 – 17:00 <b>Jenis Layanan :</b> Operasional Office Malang, Driver Wast'<i>O</i>, Humas Wast'<i>O</i></p>
                            </div>
                        </div>
                        <ul class="list-group ">
                            <li class="list-group-item ">Politeknik Negeri Malang</li>
                            <li class="list-group-item ">Jl.Soekarno Hatta</li>
                            <li class="list-group-item ">Nomor 9, Lowokwaru</li>
                            <li class="list-group-item ">Kota Malang</li>
                            <li class="list-group-item ">Jawa Timur</li>
                        </ul>
                    </div>
                    <div class="col-md ">
                        <div class="embed-responsive embed-responsive-16by9 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.017575140833!2d112.60691362603488!3d-7.946713508416278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827687d272e7%3A0x789ce9a636cd3aa2!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1606445725781!5m2!1sid!2sid "
                                width="450 " height="300 " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tanggapan -->
    <section id="tanggapan" class="tanggapan ">
        <dic></dic>
        <div class="row pt-4 mb-4 ">
            <div class="col text-center ">
                <h1>Tanggapan Anda</h1>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-lg-3 ">
                  <img src="img/Tanggapan2.png" alt="">
            </div>
            <div class="col-lg-7 ">
                
            <form action="#proses" method="GET">
                    <div class="form-row ">
                        <div class="col-md-12 mb-3 ">
                            <label for="validationDefault01 ">Nama</label>
                            <input type="text " class="form-control " name="nama">
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-6 mb-3 ">
                            <label for="validationDefault03 ">Kota</label>
                            <input type="text " class="form-control " name="kota" required>
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <label for="validationDefault04 ">Kecamatan</label>
                            <select class="custom-select " name="kecamatan" required>
                        <option selected disabled value=" ">Pilih</option>
                        <option value="Karangploso">Karangploso </option>                            
                        <option value="Singosari">Singosari</option>                          
                        <option value="Kepanjen">Kepanjen</option>                         
                        <option value="Lowokwaru">Lowokwaru</option>                          
                        <option value="Dinoyo">Dinoyo</option>
                        </select>
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <label for="validationDefault05 ">Nomer POS</label>
                            <input type="text " class="form-control " name="nomerpos" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="exampleFormControlTextarea1 ">Tanggapan Anda</label>
                        <textarea class="form-control " id="exampleFormControlTextarea1 " name="tanggapananda" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    </div>
                    <button class="btn btn-primary" name="submit" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <section id="proses" class="proses"> 
            <?php
                if(isset($_GET["submit"])){
               
                include "koneksi.php";
                $nama=$_GET['nama'];
                $kota=$_GET['kota'];
                $kecamatan=$_GET['kecamatan'];
                $nomerpos=$_GET['nomerpos'];
                $tanggapananda=$_GET['tanggapananda'];
                
                $sql="INSERT INTO tanggapan(nama, kota,kecamatan,nomerpos,tanggapananda)
                    VALUE('$nama', '$kota', '$kecamatan', '$nomerpos', '$tanggapananda')";

                if(mysqli_query($connect, $sql)){
                echo "<script>alert('Berhasil Ditambahkan!');history.go(-1);</script>";
                } else{
                echo "<script>alert('Gagal Menambahkan');history.go(-1);</script>";
                }
                mysqli_close($connect);
            }
            ?>
    </section>
    <!-- Footer -->
    <footer>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand text-white" href="#">Go Waste Go Stack</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-8">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Recycle.html">Recycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Pengolahan.html">Pengolahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Agen.html">Agen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Pemanggilan.html">Pemanggilan</a>
                    </li>
                </ul>
                <a href="https://www.google.com/"><button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search With Google</button></a>

            </div>
        </nav>
    </footer>
    <!-- Jquery File -->
    <link rel="stylesheet" href="Jquery/jquery-3.5.1.js">
    <!-- Javascript File -->
    <script src='bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src="bootstrap/js/bootstrap.min1.js "></script>
</body>

</html>