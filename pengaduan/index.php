<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaduan Masyarakat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: 700;
            color: #0d6efd !important;
        }

        .nav-link {
            color: #555 !important;
            font-weight: 500;
            margin-left: 10px;
            position: relative;
        }

        .nav-link i {
            margin-right: 5px;
        }

        .nav-link::after {
            content: "";
            width: 0%;
            height: 2px;
            background: #0d6efd;
            position: absolute;
            left: 0;
            bottom: -5px;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #0d6efd, #4facfe);
            color: white;
            padding: 130px 20px;
            text-align: center;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 40px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin: auto;
        }

        .btn-custom {
            background: white;
            color: #0d6efd;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 600;
            border: none;
        }

        .btn-custom:hover {
            background: #e9ecef;
        }

        /* ABOUT */
        .about {
            padding: 80px 20px;
        }

        .card-custom {
            border: none;
            border-radius: 20px;
            transition: 0.3s;
            padding: 30px;
        }

        .card-custom i {
            font-size: 40px;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        /* FOOTER */
        footer {
            background: #0d6efd;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand"><i class="bi bi-chat-dots-fill"></i>SIMPELC</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <i class="bi bi-info-circle"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cek_status.php">
                        <i class="bi bi-search"></i> Cek Status
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section id="home" class="hero">
    <div class="container">
        <h1>💬 Sistem Pengaduan Masyarakat Cirebon</h1>

        <p class="mt-3">
            Platform digital yang dirancang untuk membantu masyarakat dalam menyampaikan 
            keluhan, laporan, maupun aspirasi kepada pihak terkait secara cepat, mudah, 
            dan transparan tanpa harus datang langsung ke kantor.
        </p>

        <div class="mt-4">
            <a href="user/form.php" class="btn btn-custom me-2">
                <i class="bi bi-pencil-square"></i> Isi Pengaduan
            </a>
            <a href="cek_status.php" class="btn btn-outline-light">
                <i class="bi bi-search"></i> Cek Status
            </a>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about">
    <div class="container">
        <h3 class="text-center mb-3">📌 Tentang Sistem</h3>

        <p class="text-center mb-5">
            Sistem ini bertujuan untuk meningkatkan pelayanan publik dengan menyediakan 
            sarana komunikasi antara masyarakat dan pemerintah secara online. 
            Dengan sistem ini, setiap laporan dapat ditindaklanjuti dengan lebih cepat dan transparan.
        </p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <i class="bi bi-lightning-charge-fill"></i>
                    <h5>Pelaporan Cepat</h5>
                    <p>
                        Masyarakat dapat mengirim pengaduan kapan saja tanpa proses yang rumit.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <i class="bi bi-eye-fill"></i>
                    <h5>Transparansi Data</h5>
                    <p>
                        Setiap laporan memiliki status yang dapat dipantau secara real-time.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom text-center">
                    <i class="bi bi-shield-lock-fill"></i>
                    <h5>Keamanan Terjamin</h5>
                    <p>
                        Data pengguna dilindungi dan hanya digunakan untuk keperluan sistem.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2026 Sistem Pengaduan Masyarakat | Dibuat untuk meningkatkan pelayanan publik
</footer>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>