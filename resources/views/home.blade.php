<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Style CSS yang ada */
    </style>
</head>

<body>
    <!-- Navbar -->
    <header class="navbar navbar-expand-lg navbar-dark bg-gradient-custom shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" class="d-inline-block align-text-top" height="50">
                <span class="ms-2 me-5 fs-4">Inaklug</span>
            </a>            

            <!-- Untuk mobile -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Route -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/tentang-kami">Tentang Kami</a></li>
                    <!-- Tautan ke bagian Layanan Kami -->
                    <li class="nav-item"><a class="nav-link text-white" href="#layanan-kami">Layanan Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#hubungi-kami">Hubungi Kami</a></li>
                </ul>
                <a href="#" class="btn rounded-5 ms-auto text-white " style="background: #2d5086">Daftar Online</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Konten Lain -->

        <!-- Bagian Layanan Kami dengan ID layanan-kami -->
        <div class="container py-5 text-muted" style="max-width: 860px;" id="layanan-kami">
            <h1 class="mt-3 mb-5 fs-4 text-center">Layanan Kami</h1>    
            <div class="row text-center">
                <!-- Isi Layanan Kami -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-overlay">
                            <img src="{{ asset('images/bachelor.png') }}" class="card-img" alt="Studi S1 - Bachelor">
                            <div class="overlay-content">
                                <div class="line mb-4"></div>
                                <h5 class="card-title">Studi S1 - Bachelor</h5>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- Tambahan Layanan Kami lainnya -->
            </div>
        </div>

        <!-- Konten lain seperti Mitra Kami, Hubungi Kami -->
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-custom-footer text-center text-white py-3">
        <p class="mb-0">Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
