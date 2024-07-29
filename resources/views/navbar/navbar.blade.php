<!-- Start of Selection -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css.css">
    <title>Clone Kelas.com</title>
</head>
<body>
    <div id="loader" class="loader"></div>
    <div class="container" style="display: none; background-color: " id="navbar-first">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('brand-logo.svg') }}" alt="Brand Logo" class="navbar-brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center pl-7" id="navbarNav">
            <ul class="navbar-nav mx-3">
                <li class="nav-item">
                    <a class="nav-link" href="/beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/benefit">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paket">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kelas">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak Kami</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-md-block btn-group" role="group" aria-label="Basic example" style="margin-left: auto;">
            <button type="button" class="btn" style="background-color: #C2A16B; color: white; border: none; border-radius: 5px; padding: 10px 20px;">Ajukan Demo</button>
            <button type="button" class="btn" style="background-color: white; color: #C2A16B; border: 2px solid #C2A16B; border-radius: 5px; padding: 10px 20px; margin-left: 10px;">Masuk</button>
        </div>
        <div class="d-md-none btn-group" role="group" aria-label="Basic example" style="margin-left: auto;">
        </div>
    </nav>
    </div>
</body>
<!-- End of Selection -->