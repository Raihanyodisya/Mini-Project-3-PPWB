<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Studio Rekaman Yodis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" onclick="scrollToSection('selamat-datang')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="scrollToSection('tentang-kami')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="scrollToSection('kontak-kami')">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-dark me-2" onclick="redirectToRegisterPage()">Register</button>
                    <button type="button" class="btn btn-outline-dark ms-2" onclick="redirectToLoginPage()">Login</button>
                </form>
            </div>
        </div>
    </nav>


    <section class="container mt-5" id="selamat-datang">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <h2>Selamat Datang di Studio Rekaman Yodis</h2>
                <p>Studio Rekaman Yodis merupakan tempat yang cocok bagi para musisi untuk merekam karya-karya mereka dengan kualitas suara yang terbaik. Kami menyediakan berbagai fasilitas dan layanan yang akan membantu Anda dalam proses rekaman.</p>
                <p>Berikut adalah beberapa fasilitas yang kami sediakan:</p>
                <ul>
                    <p>Ruang rekaman dengan akustik yang dirancang khusus, Peralatan rekaman berkualitas tinggi</p>
                    <p>Studio kontrol dengan peralatan canggih dan Sound engineer berpengalaman</p>
                </ul>
            </div>
            <div class="col-md-6 offset-md-3 text-center">
                <div class="image-container">
                    <img src="Studio-1.jpg" class="img-fluid" alt="Studio Rekaman">
                    <div class="text-overlay">
                        <h3>Gambar Studio Rekaman</h3>
                        <p>Studio 1</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5" id="tentang-kami">
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <h2>Tentang Studio Rekaman Yodis</h2>
                <p>Studio Rekaman kami didirikan pada tahun 2024 dengan visi untuk menyediakan lingkungan yang kreatif dan profesional bagi musisi untuk merekam karya-karya mereka dengan kualitas terbaik. Kami memiliki tim yang berpengalaman dan peralatan rekaman yang berkualitas tinggi untuk mendukung setiap tahap proses rekaman.</p>
                <p>Kami percaya bahwa setiap proyek rekaman memiliki cerita uniknya sendiri, dan kami berkomitmen untuk memberikan layanan yang disesuaikan dengan kebutuhan dan visi setiap klien kami. Dari rekaman lagu hingga produksi audiovisual, kami siap membantu Anda mewujudkan visi Anda.</p>
                <p>Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut atau untuk membuat janji pertemuan dengan tim kami. Kami siap membantu Anda mencapai hasil rekaman yang memuaskan!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="image-container">
                    <img src="Studio-2.jpg" class="img-fluid" alt="Studio Rekaman">
                    <div class="text-overlay">
                        <h3>Gambar Studio Rekaman</h3>
                        <p>Studio 2</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5" id="kontak-kami">
        <div class="row">
            <div class="col-md-12">
                <h2>Kontak Kami</h2>
                <p>Untuk informasi lebih lanjut atau jika Anda memiliki pertanyaan, silakan hubungi kami melalui:</p>
                <ul>
                    <p>Email : info@studiorekamanyodis.com</p>
                    <p>Telepon : 0812-5513-9435</p>
                    <p>Alamat : Jl. Mt. Haryono Gg.1 No.19, Kalimantan Timur, Samarinda</p>
                </ul>
            </div>
        </div>
    </section>

    <script>
        function redirectToLoginPage() {
            window.location.href = 'login.php';
        }

        function redirectToRegisterPage() {
            window.location.href = 'registeruser.php';
        }

        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>