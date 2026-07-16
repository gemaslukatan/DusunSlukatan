<?php 
// Memanggil navbar dari folder includes
include 'includes/navbar.php'; 
?>

<!-- Memanggil CSS khusus halaman pemetaan krb -->
<link rel="stylesheet" href="assets/css/pemetaan-krb.css">

<!-- Memanggil FontAwesome CDN untuk memunculkan icon sosial media di footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Hero / Jumbotron Section (Tinggi Penuh Layar) -->
<div class="hero-section-krb" style="background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.45)), url('assets/img/home.jpg');">
    <div class="container">
        <h1>Pemetaan Kawasan Rawan Bencana</h1>
        <p>
            Pemetaan Kawasan Rawan Bencana (KRB) menyajikan informasi mengenai tingkat kerawanan bencana di wilayah Desa Sidokaten. Peta ini membantu masyarakat mengenali area yang berpotensi terdampak bencana sehingga dapat meningkatkan kewaspadaan, mendukung upaya mitigasi, dan menjadi acuan dalam perencanaan pembangunan yang lebih aman.
        </p>
    </div>

    <!-- Vektor SVG Gelombang Pembatas -->
    <div class="wave-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,42.4V0Z" class="shape-fill"></path>
        </svg>
    </div>
</div>

<!-- Main Content Section (Bagian Peta) -->
<div class="map-section-krb">
    <div class="container">
        
        <!-- Judul Peta -->
        <h2>Peta Kawasan Rawan Bencana</h2>
        
        <!-- Wadah Peta menggunakan Iframe agar style PDF tidak merusak template website -->
        <div class="map-container-wrap">
           <iframe src="../KKN/pages/peta-pdf.html" style="width:100%; height:100%; border:none;" title="Peta KRB"></iframe>
        </div>
        
    </div>
</div>

<?php 
// Memanggil footer dari folder includes
include 'includes/footer.php'; 
?>