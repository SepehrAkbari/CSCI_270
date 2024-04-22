<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta name="description" content="Sepehr Akbari Digital Media Design Portfolio">
        <meta name="keywords" content="CSCI270, Lake Forest College, Sepehr Akbari, Portfolio, Art">
        <meta name="author" content="Sepehr Akbari">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITLE -->
        <title><?= $tab ?></title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- My CSS -->
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <!-- LOGO -->
                <a class="navbar-brand" href="#">
                    <img src="/~akbaris79/csci270/final/visuals/SA_favicon.png" alt="logo" width="30" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <!-- NAV ITEMS -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isset($Gallery) ? "active":"na" ?>" <?= isset($Gallery) ? "'aria-current'='page'":"" ?> href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Me</a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
