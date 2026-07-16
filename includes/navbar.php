<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Website Desa Slukatan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">

</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'home') ? 'active' : '' ?>" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'profil') ? 'active' : '' ?>" href="profil.php">
                        Profil Desa
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'mat') ? 'active' : '' ?>" href="pemetaan-mat.php">
                        Pemetaan MAT
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'krb') ? 'active' : '' ?>" href="pemetaan-krb.php">
                        Pemetaan KRB
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'about') ? 'active' : '' ?>" href="about.php">
                        About Us
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
</body>