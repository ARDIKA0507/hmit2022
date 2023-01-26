<!-- blogbugabagi.blogspot.com -->
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>HMIT</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body id="home" class="scrollspy">
    <!-- navbar -->
    <div class="navbar-fixed">
            <nav class="light-green accent-4">
                <div class="container">
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <div class="nav-wrapper">
                            <a href="#home" class="brand-logo">HMIT</a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#tentang">Tentang</a></li>
                                <li><a href="#partner">Partner</a></li>
                                <li><a href="#kegiatan">Kegiatan</a></li>
                                <li><a href="#galeri">galeri</a></li>
                                <li><a href="#kontak">Kontak</a></li>
                            </ul>
                        </div>
                </div>
            </nav>
          </div>
    <!-- mavbar-end -->

    <!-- SideNav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#partner">Partner</a></li>
        <li><a href="#pelayanan">Kegiatan</a></li>
        <li><a href="#galeri">galeri</a></li>
        <li><a href="#kontak">Contact</a></li>
    </ul>
    <!-- SideNav-end -->

    <!-- Slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/u.jpg">
                <div class="caption center-align">
                <h3 class="z-depth-5">Krispati 2022</h3>
                <h5 class="light grey-text text-lighten-3">Informatika</h5>
                </div>
            </li>
            <li>
                    <img src="img/slider/t.jpg">
                    <div class="caption center-align">
                    <h3 class="z-depth-5">HMIT</h3>
                    <h5 class="light grey-text text-lighten-3">Himpunan Mahasiswa Informatika</h5>
                    </div>
            </li>
            <li>
                    <img src="img/slider/i.jpg">
                    <div class="caption center-align">
                    <h3 class="z-depth-5">Kesatria IT</h3>
                    <h5 class="light grey-text text-lighten-3">Masa Pengkaderan Himpunan</h5>
                    </div>
            </li>    
        </ul>
      </div>
    <!-- Slider-end -->

    <!-- About -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center grey-text light text-darken-3">Tentang HMIT</h3>
                <div class="col m6 light">
                    <h6>Himpunan Mahasiswa Informatika</h6>
                    <p>
                        Menjadi wadah terbentuknya karakter yang visioner, berintegritas tinggi, dan menjadi organisasi yang dikenal luas dengan mutu dan pengembangan karakter serta karya-karyanya di bidang Computer Science.
                        Memperkuat ikatan antar sesama anggota keluarga HMIT dengan pengetahuan, pengalaman, dan nilai-nilai baik dalam membentuk satu keluarga HMIT yang solid. BrotherHood!!
                        </p>
                </div>  
                <div class="col m6 light">
                    <h6>Proker</h6>
                    <p>aspirasi</p>
                    <p>
                       aspirasi adalah sebuah wadah untuk mahasiswa informatika untuk menyampaikan aspirasi kritik dan sarannya
        </p>
                    <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                    </div>
                    <p>bengkel IT</p>
                    <p> sebuah tempat yang di buka oleh himpunan untuk belajar seputaran informatika
</p>
                    <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                    </div>
                    <p>tongkrongan IT</p>
                    <p> sebuah tempat untuk berkumpulnya anak himpunan
</p>
                    <div class="progress">
                            <div class="determinate" style="width: 92%"></div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- About-end -->

    <!-- Partner -->
    <div id="partner" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/kita-hmit.jpg"></div>
        <div class="container clients">
            <h3 class="center light white-text">Osjur</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/partner/uts.png">
                </div>
                <div class="col m4 s12 center">
                        <img src="img/partner/himunan.png">
                </div>
                <div class="col m4 s12 center">
                        <img src="img/partner/permikomnas.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Partner-end -->

    <!-- Kegiatan -->
    <section id="kegiatan" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Kegiatan</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">developer_mode</i>
                        <h5>kelas tekno</h5>
                        <p>Agenda himpunan mahasiswa informatika dalam kegiatan kelas tekno yang dilakukan setiap hari sabtu yang dapat diikuti seluruh mahasiswa informatika agar menambah pengetahuan mereka tentang bahasa pemrograman.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                        <div class="card-panel center">
                            <i class="material-icons medium">event</i>
                            <h5>bootcamp</h5>
                            <p>Agenda himpunan mahasiswa informatika dalam kegiatan bootcam ini dengan menghadirkan beberapa peserta yang akan mengikuti lomba yang telah di buka oleh himpunan. perlombaan nya pun berbagai jenis mulai dari desain dan pembuatan aplikasi</p>
                        </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">school</i>
                        <h5>Seminar</h5>
                        <p>Agenda himpunan mahasiswa informatika dalam kegiatan Seminar baik seminar nasional maupun lokal yang diadakan setiap tahun secara rutin agar dapat menambah pengetahuan yang didapatkan dari seminar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kegiatan-end -->

    <!-- Galeri -->
    <section class="portfolio  scrollspy" id="galeri">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">galeri</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/i.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/j.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/m.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/n.jpg" class="materialboxed responsive-img">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/galeri/o.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/t.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/u.jpg" class="materialboxed responsive-img">
                </div>
                <div class="col m3 s12">
                    <img src="img/galeri/v.jpg" class="materialboxed responsive-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Galeri-end -->

    <!-- lontak -->
    <section id="kontak" class="kontak grey lighten-3 scrollspy">
        <div class="container">
            <h3 class="light grey-text text-darken-3 center"></h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel light-green accent-4 center">
                        <i class="material-icons white-text">email</i>
                        <h5>Kontak</h5>
                        <p>Himpunan Mahasiswa Informatika Universitas Teknologi Sumbawa
                        </p> 
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h5>Alamat</h5></li>
                        <li class="collection-item">Sekretariat HMIT</li>
                        <li class="collection-item">Jl. Olat Maras </li>
                        <li class="collection-item">NTB, Indonesia</li>
                    </ul>
                </div>

                        
                </div>
            </div>
        </div>
    </section>
    
    <!-- kontak-end -->

    <!-- footer -->
    <footer class="light-green accent-4 center">
        <p>HMIT. 2021</p>
    </footer>
    <!-- footer-end -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators:false,
            height: 500,
            transition:600,
            interval:3000
        });

        const parallaxkeren = document.querySelectorAll('.parallax');
        M.Parallax.init(parallaxkeren);

        const materialboxjalan = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialboxjalan);

        const scrolloto = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scrolloto, {
            scrollOffset: 50
        });
    </script>
  </body>
</html>