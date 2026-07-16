<?php
$page = "profil";
include 'includes/navbar.php';
?>

<!-- CSS KHUSUS HALAMAN PROFIL -->
<link rel="stylesheet" href="assets/css/profil.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<!-- ===========================
        HERO PROFIL DESA
=========================== -->

<section class="profil-hero">

    <div class="hero-overlay"></div>

    <div class="carousel-container">

        <!-- Tombol kiri -->
        <button class="carousel-btn prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- ================= CAROUSEL ================= -->

        <div class="carousel">

            <!-- CARD 1 -->

            <div class="carousel-item">

                <div class="wisata-card">

                    <div class="card-image">

                        <img src="assets/img/traking.jpeg" alt="Tracking Gunung Bismo">

                    </div>

                    <div class="card-info">

                        <h3>Tracking Gunung Bismo</h3>

                        <p>

                            <i class="fa-solid fa-location-dot"></i>

                            Dusun Silandak, Kec. Mojotengah

                        </p>

                    </div>

                </div>

            </div>


            <!-- CARD 2 -->

            <div class="carousel-item active">

                <div class="wisata-card">

                    <div class="card-image">

                        <img src="assets/img/jembatan.jpeg" alt="Jembatan">

                    </div>

                    <div class="card-info">

                        <h3>Jembatan Hängebrücke</h3>

                        <p>

                            <i class="fa-solid fa-location-dot"></i>

                            Dusun Slukatan, Kec. Mojotengah

                        </p>

                    </div>

                </div>

            </div>


            <!-- CARD 3 -->

            <div class="carousel-item">

                <div class="wisata-card">

                    <div class="card-image">

                        <img src="assets/img/sungaiMudal.jpeg" alt="Sungai Mudal">

                    </div>

                    <div class="card-info">

                        <h3>Sungai Mudal</h3>

                        <p>

                            <i class="fa-solid fa-location-dot"></i>

                            Dusun Slukatan, Kec. Mojotengah

                        </p>

                    </div>

                </div>

            </div>


            <!-- CARD 4 -->

            <div class="carousel-item">

                <div class="wisata-card">

                    <div class="card-image">

                        <img src="assets/img/curug.jpg" alt="Curug">

                    </div>

                    <div class="card-info">

                        <h3>Curug Slukatan</h3>

                        <p>

                            <i class="fa-solid fa-location-dot"></i>

                            Desa Slukatan

                        </p>

                    </div>

                </div>

            </div>


            <!-- CARD 5 -->

            <div class="carousel-item">

                <div class="wisata-card">

                    <div class="card-image">

                        <img src="assets/img/kopi.jpg" alt="Kopi">

                    </div>

                    <div class="card-info">

                        <h3>Wisata Edukasi Kopi</h3>

                        <p>

                            <i class="fa-solid fa-location-dot"></i>

                            Desa Slukatan

                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- ================= END ================= -->


        <!-- Tombol kanan -->

        <button class="carousel-btn next">

            <i class="fa-solid fa-chevron-right"></i>

        </button>

    </div>

    <!-- Indicator -->

    <div class="indicator">

        <span class="dot active"></span>

        <span class="dot"></span>

        <span class="dot"></span>

        <span class="dot"></span>

        <span class="dot"></span>

    </div>

</a>

</section>

<section class="destinasi" id="destinasi">

    <!-- Sungai Mudal -->

    <div class="wisata-item">

        <div class="wisata-image">

            <img src="assets/img/sungaiMudal.jpeg">

        </div>

        <div class="wisata-text">

            <h2>Sungai Mudal</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Slukatan, Kec. Mojotengah

            </p>

            <p>

                Mata Air Mudal merupakan salah satu destinasi wisata
                alam di Dusun Slukatan yang memiliki air jernih,
                suasana sejuk dan pemandangan pegunungan yang indah.

            </p>

        </div>

    </div>



    <!-- Jembatan -->

    <div class="wisata-item reverse">

        <div class="wisata-image">

            <img src="assets/img/jembatan.jpeg">

        </div>

        <div class="wisata-text">

            <h2>Jembatan Gantung Hängebrücke</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Slukatan, Kec. Mojotengah

            </p>

            <p>

                Jembatan gantung ini menjadi ikon wisata Desa
                Slukatan dengan panorama alam yang sangat indah.

            </p>

        </div>

    </div>



    <!-- Tracking -->

    <div class="wisata-item">

        <div class="wisata-image">

            <img src="assets/img/traking.jpeg">

        </div>

        <div class="wisata-text">

            <h2>Tracking Gunung Bismo</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Silandak, Kec. Mojotengah

            </p>

            <p>

                Jalur pendakian menuju Gunung Bismo menawarkan
                panorama pegunungan dan udara yang sangat sejuk.

            </p>

        </div>

    </div>


    <!-- Gunung Bismo -->

    <div class="wisata-item reverse">

        <div class="wisata-image">

            <img src="assets/img/bismo.jpg">

        </div>

        <div class="wisata-text">

            <h2>Sunrise Gunung Bismo</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Silandak, Kec. Mojotengah

            </p>

            <p>

                Sunrise Gunung Bismo menawarkan pemandangan yang memukau dengan udara sejuk dan suasana alami yang menenangkan.

            </p>

        </div>

    </div>

<!-- Curug -->

    <div class="wisata-item">

        <div class="wisata-image">

            <img src="assets/img/curug.jpg">

        </div>

        <div class="wisata-text">

            <h2>Curug Bismo</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Silandak , Kec. Mojotengah

            </p>

            <p>

                Curug Bismo menawarkan pemandangan yang memukau dengan air terjun yang jernih dan udara yang sangat sejuk.

            </p>

        </div>

    </div>

       <!-- Kopi  -->

    <div class="wisata-item reverse">

        <div class="wisata-image">

            <img src="assets/img/kopi.jpg">

        </div>

        <div class="wisata-text">

            <h2>Kopi Slukatan</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Slukatan, Kec. Mojotengah

            </p>

            <p>

                Kopi Slukatan adalah kopi lokal yang terkenal dengan cita rasa yang khas dan proses perendaman yang memperlambat ekstraksi senyawa, menghasilkan kopi dengan rasa yang lebih kompleks dan lembut.

            </p>

        </div>

    </div>

    <!-- Tepung Mocaf -->

    <div class="wisata-item">

        <div class="wisata-image">

            <img src="assets/img/tepungmocaf.jpg">

        </div>

        <div class="wisata-text">

            <h2>Tepung Mocaf</h2>

            <p class="lokasi">

                <i class="fa-solid fa-location-dot"></i>

                Dusun Slukatan, Kec. Mojotengah

            </p>

            <p>

                Tepung Mocaf adalah produk lokal yang terkenal dengan kualitasnya yang tinggi dan cita rasa yang unik.

            </p>

        </div>

    </div>
</section>

<script src="assets/js/profil.js"></script>

<?php
include 'includes/footer.php';
?>