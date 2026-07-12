<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Terkini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">I-NEWS</a>
        </div>
    </nav>

    <div class="container my-4">
        <!-- BERITA UTAMA -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card bg-dark text-white shadow border-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?q=80&w=1000" class="card-img opacity-50" alt="Berita Utama" style="height: 400px; object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <span class="badge bg-danger mb-2 align-self-start">Teknologi</span>
                        <h2 class="card-title fw-bold">Masa Depan AI di Tahun 2026: Apakah Robot Akan Menggantikan Programmer?</h2>
                        <p class="card-text">Perkembangan kecerdasan buatan semakin pesat di pertengahan tahun 2026 ini. Simak ulasan lengkap mengenai dampaknya pada industri kreatif dan teknologi global...</p>
                        <p class="card-text text-light small">Publisher: Regita Lundi Tifara | 12 Juli 2026</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DAFTAR BERITA LAINNYA -->
        <h4 class="fw-bold mb-3">Berita Terbaru</h4>
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=500" class="card-img-top" alt="Berita 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">Edukasi</span>
                        <h5 class="card-title fw-bold text-dark">Tips Belajar Framework Laravel 11 untuk Pemula</h5>
                        <p class="card-text text-muted">Belajar Laravel kini jauh lebih mudah dengan struktur folder baru yang lebih ringkas...</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-muted small pb-3">
                        Oleh: Admin | 12 Juli 2026
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=500" class="card-img-top" alt="Berita 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Gaming</span>
                        <h5 class="card-title fw-bold text-dark">Industri Game Lokal Indonesia Tembus Pasar Internasional</h5>
                        <p class="card-text text-muted">Beberapa studio game asal Indonesia berhasil memenangkan penghargaan bergengsi di ajang global...</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-muted small pb-3">
                        Oleh: Redaksi | 11 Juli 2026
                    </div>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="https://images.unsplash.com/photo-1473186578172-c141e6798cf4?q=80&w=500" class="card-img-top" alt="Berita 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Bisnis</span>
                        <h5 class="card-title fw-bold text-dark">Strategi UMKM Bertahan di Era Digital Finansial</h5>
                        <p class="card-text text-muted">Penggunaan QRIS dan dompet digital terbukti menaikkan omzet pedagang kecil hingga dua kali lipat...</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-muted small pb-3">
                        Oleh: Keuangan | 10 Juli 2026
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0 small">&copy; 2026 Portal Berita - Tugas Dasar Laravel.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>