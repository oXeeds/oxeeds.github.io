<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-index.css" />

    <!-- Tambahan -->
    <!-- Font - Inter Bold 40 -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Title -->
    <title>Beranda - SDN 1 Purwokerto Kulon</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container-fluid">
            <!-- <h1>SDN 1 PURWOKERTO KULON</h1> -->
            <div class="row">
                <div class="col-sm-4 bg-white text-black text-start" id="img-header-TWH"><img src="img/index/TWH.png"
                        width="100px" class="img-fluid" /></div>
                <div class="col-sm-4 bg-white text-black text-center" id="txt-header">SDN 1 PURWOKERTO KULON</div>
                <div class="col-sm-4 bg-white text-black text-end" id="img-header-BC"><img
                        src="img/index/BanyumasColor.png" width="100px" class="img-fluid" /></div>
            </div>
        </div>
    </header>
    <!-- Akhir dari Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg text-white bs5" style="background-color: #282a35">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" id="bg-nav">
                <a id="button-nav" class="nav-link active text-white" style="background-color: #00a859"
                    aria-current="page" href="#">Beranda</a>
                <a id="button-nav" class="nav-link text-white" href="berita.html">Berita</a>
                <a id="button-nav" class="nav-link text-white" href="galeri.html">Galeri</a>
                <a id="button-nav" class="nav-link text-white" href="data.html">Data</a>
            </div>
        </div>
    </nav>
    <!-- Akhir dari Navbar -->

    <!--Slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/data/3.jpg" class="d-block w-100" alt="gambar1" />
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-5">
                        SELAMAT DATANG DI <br />
                        <span class="fw-bold">SDN 1 PURWOKERTO KULON</span>
                    </h1>
                    <p class="col fs-4">“Terwujudnya siswa yang beriman, berakhlak mulia, cerdas, terampil, dan
                        mandiri”.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/data/2.jpg" class="d-block w-100" alt="gambar2" />
            </div>
            <div class="carousel-item">
                <img src="img/data/1.jpg" class="d-block w-100" alt="gambar3" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--End Slider-->

    <!-- Kepala Sekolah -->
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col text-center text-black">
                    <h2>Sambutan Kepala Sekolah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt nesciunt nobis beatae modi,
                        nihil doloremque excepturi officiis repellendus atque a unde exercitationem maiores eveniet
                        quaerat!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- akhir kepala sekolah -->

    <!-- Visi Misi -->
    <section id="visimisi">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2>
                        Visi Misi <br />
                        SDN 1 Purwokerto Kulon
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h3>Visi</h3>
                    <p>Terwujudnya Siswa yang Beriman, Berakhlak Mulia, Cerdas, Terampil, dan Mandiri</p>
                </div>
                <div class="col-8">
                    <h4>Misi</h4>
                    <p>
                        Untuk mencapai visi sebagai sekolah yang terdepan, terbaik, dan terpercaya, perlu dilakukan
                        suatu misi berupa kegiatan jangka panjang dengan arah yang jelas dan sistematis. Berikut misi
                        Sekolah Dasar Negeri 1
                        Purwokerto Kulon yang dirumuskan berdasarkan visi sekolah, yaitu:
                    </p>
                    <ol>
                        <li>Mendidik dan membimbing peserta didik untuk menjadi manusia yang beriman dan bertaqwa kepada
                            Tuhan Y.M.E.</li>
                        <li>Mendidik dan membimbing peserta didik menjadi manusia yang berakhlak mulia dan berbudi
                            luhur.</li>
                        <li>Membimbing peserta didik menjadi manusia yang cerdas , terampil, dan berdaya guna.</li>
                        <li>Mendidik siswa menjadi manusia jujur, disiplin, mandiri dan bertanggung jawab.</li>
                        <li>Melaksanakan pembelajaran saintifik sehingga tercipta belajar mengajar yang kreatif,
                            efektif, inovatif, kondusif.</li>
                    </ol>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00a859" fill-opacity="1"
                d="M0,128L21.8,149.3C43.6,171,87,213,131,202.7C174.5,192,218,128,262,90.7C305.5,53,349,43,393,42.7C436.4,43,480,53,524,90.7C567.3,128,611,192,655,197.3C698.2,203,742,149,785,133.3C829.1,117,873,139,916,128C960,117,1004,75,1047,96C1090.9,117,1135,203,1178,202.7C1221.8,203,1265,117,1309,90.7C1352.7,64,1396,96,1418,112L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir visi misi -->

    <!-- Berita -->
    <section id="project">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Berita</h2>
                </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="img/index/taman.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Operasi Semut! Pembersihan Lapangan</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos
                            adipisci, porro unde laboriosam est natus!</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 2 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/index/ruang kelas.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Kegiatan Belajar Mengajar Efektif</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti
                            nisi fugit laborum enim maiores facilis, adipisci fugiat ipsam veritatis.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 4 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/index/bermain.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Pemantauan Anak-anak</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae accusamus voluptates nemo
                            voluptatum inventore! Dolor iure sint obcaecati consectetur expedita delectus aliquid nisi,
                            odio quisquam.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 6 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,160L21.8,165.3C43.6,171,87,181,131,170.7C174.5,160,218,128,262,117.3C305.5,107,349,117,393,106.7C436.4,96,480,64,524,69.3C567.3,75,611,117,655,149.3C698.2,181,742,203,785,197.3C829.1,192,873,160,916,160C960,160,1004,192,1047,170.7C1090.9,149,1135,75,1178,74.7C1221.8,75,1265,149,1309,165.3C1352.7,181,1396,139,1418,117.3L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- akhir berita -->

    <!-- Footer -->
    <footer>
        <!-- Start Contact -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="content">
                    <div class="box form">
                        <form>
                            <input type="text" placeholder="Masukkan Nama" />
                            <input type="text" placeholder="Masukan Email" />
                            <input type="text" placeholder="Masukan No. HP" />
                            <textarea placeholder="Masukkan Pesan"></textarea>
                            <button type="submit">Kirim Pesan</button>
                        </form>
                    </div>
                    <div class="box text">
                        <h2>SDN 1 PURWOKERTO KULON</h2>
                        <p class="title-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="info">
                            <ul>
                                <li><span class="fa fa-map-marker"></span> Jln. DI Panjaitan Gang Karangbaru III No.50
                                    Kecamatan Purwokerto Selatan Kabupan Banyumas</li>
                                <li>
                                    <span class="fa fa-phone"></span>
                                    (0281) 6577339
                                </li>
                                <li><span class="fa fa-envelope"></span> info@Lorem.com</li>
                            </ul>
                        </div>
                        <div class="copy">&copy;Copyright 2022. All Right Reserved</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
    </footer>
    <!-- Akhir dari Footer -->

    <!--Script Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!--Script menghubungkan ke jquery-->
    <script src="jquery-3.6.0.min.js"></script>

    <!--Script menghubungkan ke js-->
    <script src="/js/script.js"></script>
</body>

</html>