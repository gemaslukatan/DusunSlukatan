// Memastikan script berjalan setelah seluruh struktur HTML selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    console.log("Halaman Pemetaan MAT Berhasil Dimuat");

    // Deteksi jika pengguna membuka lewat Handphone (Screen width < 576px)
    if (window.innerWidth <= 576) {
        // Otomatis memberikan penyesuaian performa/interaksi khusus mobile jika dibutuhkan nanti
        const cards = document.querySelectorAll('.bahaya-card');
        cards.forEach((card, index) => {
            card.style.opacity = "0";
            card.style.transform = "translateY(20px)";
            card.style.transition = "all 0.5s ease-in-out";
            
            // Efek kemunculan beruntun (staggered fade-in) untuk card di mobile
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }, 150 * index);
        });
    }
});