<?php
// Process login data to database
require_once 'assets/functions/session.login.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Wisdoom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/images/branding/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/branding/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/branding/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/branding/favicon-16x16.png">
    <link rel="icon" href="assets/images/branding/favicon.ico">
    <link rel="manifest" href="assets/images/branding/site.webmanifest">
</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : 'index-page'; ?> header-page">
    <!-- Navmenu -->
    <header>
        <nav class="navbar navbar-expand-md p-3 px-5">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="assets/images/branding/Wisdoom.png" alt="Wisdoom Logo" width="170">
                </a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Startsida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles.php">Artiklar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="docs.php">Dokumentärer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books.php">Böcker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Om oss</a>
                    </li>
                </ul>
                <form class="d-flex ms-3">
                    <input type="search" class="form-control me-2 rounded-pill w-75" placeholder="Sök" aria-label="Sök...">
                    <button type="submit" class="btn btn-dark">Sök</button>
                </form>
                <?php
                // Check if user is logged in
                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                    // Shows logout button if user is logged in
                    echo '
                    <a href="assets/functions/session.logout.php" class="btn btn-secondary ms-2"> Logga ut
                    </a>
                    ';
                } else {
                    // Shows login button if user is not logged in
                    echo '
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-dark ms-2 dropdown-toggle" data-bs-toggle="dropdown">
                            Logga in
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="width: 300px">
                            <form action="index.php" method="post" class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-post</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Lösenord</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-secondary" name="login">Logga in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Glömt lösenord?</a>
                            <a class="dropdown-item" href="register.php">Skapa konto</a>
                        </div>
                    </li>
                </ul>
                ';
                }
                ?>
            </div>
        </nav>
    </header>