<?php
require_once 'assets/bootstrap.php';
// Register information to database
require_once 'assets/functions/insert.php';
// Get reviews from database
require_once 'assets/functions/select.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Wisdoom</title>
    <!-- Unified CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
      <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/branding/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/branding/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/branding/favicon-16x16.png">
  <link rel="icon" href="assets/images/branding/favicon.ico">
  <link rel="manifest" href="assets/images/branding/site.webmanifest">
</head>

<body class="books-page header-page">
    <?php include 'assets/includes/header.php'; ?>
    <main>
        <?php
        // Checks if an action is set
        if (isset($_GET['action'])) {
            // Checks which action is set
            switch ($_GET['action']) {
                case 'success':
                    echo '<div class="alert alert-success" role="alert">Recensionen har uppdaterats!</div>';
                    break;
                case 'deleted':
                    echo '<div class="alert alert-danger" role="alert">Recensionen har raderats!</div>';
                    break;
            }
        }
        ?>
        
<!-- Hero section -->
        <section class="hero text-center articles-hero">
            <h1 class="articles-hero-title">
                <p class="text-white">Populära böcker</p>
            </h1>
            <h3 class="articles-hero-subtitle">
                <p class="text-white">Topplistan just nu!</p>
            </h3>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

<!-- Topp 2 rutorna -->
        <section class="articles-top-section">
            <div class="container-lg">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="feature-card feature-card-large">
                            <div class="text-warning articles-stars">
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                            </div>

                            <img src="assets/images/books/bok2.png" alt="bild på bok n.1" class="article-img-large">
                            <p class="articles-card-text">En resa genom vetenskapens historia, från tidiga upptäckter till dagens avancerade forskning. Boken visar hur idéer, experiment och teknologiska framsteg har förändrat vår förståelse av universum.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-card feature-card-large">
                            <div class="text-warning articles-stars">
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                            </div>

                            <img src="assets/images/books/bok1.png" alt="bild på bok n.2" class="article-img-large">
                            <p class="articles-card-text">En översikt över mänsklighetens historia från antiken till dagens moderna samhälle. Boken utforskar stora imperier, kulturella förändringar och historiska händelser som format världen vi lever i idag.</p>
                        </div>
                    </div>
<!-- Topp 3-10 rutorna -->
                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>3:</h4>
                                <img src="assets/images/books/bok3.png" alt="bild på bok n.3" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En bok om de viktigaste upptäckterna och hur de har påverkat samhället.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>4:</h4>
                                <img src="assets/images/books/bok4.png" alt="bild på bok n.4" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En fascinerande genomgång av människans evolution. Boken beskriver hur våra tidiga förfäder utvecklades över miljontals år och hur biologiska och kulturella förändringar formade den moderna människan.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>5:</h4>
                                <img src="assets/images/books/bok5.png" alt="bild på bok n.5" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En bok om naturens fascinerande fenomen och de komplexa ekosystem som formar livet på jorden.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>6:</h4>
                                <img src="assets/images/books/bok6.png" alt="bild på bok n.6" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En inblick i livet under medeltida Europa. Boken beskriver kungadömen, samhällsstrukturer, religion och kultur under en period som lade grunden för det moderna Europa.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>7:</h4>
                                <img src="assets/images/books/bok7.png" alt="bild på bok n.7" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En introduktion till arkeologiska fynd som avslöjar historien om mänskliga civilisationer.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>8:</h4>
                                <img src="assets/images/books/bok8.png" alt="bild på bok n.8" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">Vad är intelligens och hur fungerar hjärnan? Den här boken utforskar hjärnans utveckling, kognition och forskning om mänskligt tänkande och lärande.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>9:</h4>
                                <img src="assets/images/books/bok9.png" alt="bild på bok n.9" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En introduktion till renässansen, en tid av konstnärlig och vetenskaplig blomstring i Europa. Boken lyfter fram idéer, konstnärer och upptäckter som förändrade synen på människan och världen.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>10:</h4>
                                <img src="assets/images/books/bok10.png" alt="bild på bok n.10" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En historisk genomgång av idéer och upptäckter som förändrat vår förståelse av världen.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

<!--Valda boken-->
        <section class="articles-featured-section">
            <div class="container-lg">
                <div class="articles-featured-card">
                    <img src="assets/images/books/bok2.png" alt="bild på bok n.1" class="articles-featured-img">
                    <div class="articles-featured-content">
                        <div class="text-warning articles-featured-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2 class="articles-featured-title">Vetenskapens utveckling</h2>
                        <p class="articles-featured-author">by; Brian Nelson</p>

                        <div class="articles-featured-buttons">
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Läs bok</u><i class="fa-brands fa-leanpub fa-xl ms-2"></i></p>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Lyssna på bok</u><i class="fa-solid fa-volume-high fa-xl ms-2"></i></p>
                            </button>
                        </div>

                        <p class="articles-featured-description">En resa genom vetenskapens historia, från tidiga upptäckter till dagens avancerade forskning. Boken visar hur idéer, experiment och teknologiska framsteg har förändrat vår förståelse av universum.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

<!-- Testimonial section-->
       <section class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mt-5">
                <h2>
                    <p class="text-white text-left text-sucess">Recensioner</p>
                </h2>

                <a href="recension.php?source=docs" class="btn btn-sucess">
                    <p class="shadow text-white text-left text-sucess"><i class="fa-solid fa-plus"></i>Skapa recension</p></a>
            </div>

<!--Show reviews from database-->
            <div class="row g-4">
                <?php
                $reviews = show_reviews($dbh, 'books');
                foreach ($reviews as $row) {
                    $fullName = trim(($row['firstname'] ?? '') . ' ' . ($row['lastname'] ?? ''));
                    if ($fullName === '') {
                        $fullName = 'Anvandare ' . (string) $row['user_id'];
                    }
                    echo "<div class='card-b mb-3'>";
                    echo "<i class='fa-solid fa-circle-user fa-xl'></i>";
                    echo "<p class='fw-bold mb-0'>" . $fullName . "</p>";
                    echo "<div class='text-warning mb-2'>";
                    echo "<i class='fa-regular fa-star'></i>";
                    echo "<i class='fa-regular fa-star'></i>";
                    echo "<i class='fa-regular fa-star'></i>";
                    echo "<i class='fa-regular fa-star'></i>";
                    echo "<i class='fa-regular fa-star'></i>";
                    echo "</div>";
                    echo "<h3>" . $row['review_title'] . "</h3>";
                    echo "<p>" . $row['review_content'] . "</p>";
                    echo "<p class='text-muted mb-1'>" . $row['created_at'] . "</p>";

                    // Edit & Delete
                    echo "<p class='text-danger-emphasis mb-1'>";
                    echo "<a href='edit.php?id=" . $row['review_id'] . "'>";
                    echo "<u>Redigera</u><i class='fa-regular fa-pen-to-square'></i>";
                    echo "</a>";
                    echo "<a href='remove.php?id=" . $row['review_id'] . "'>";
                    echo "<u>Radera</u><i class='fa-regular fa-trash-can'></i>";
                    echo "</a>";
                    echo "</p>";
                    echo "</div>";

                    // Like and Comment
                    echo "<div class='d-flex flex-row-reverse'>";
                    echo "<div class='p-2'>";
                    echo "<p class='shadow text-white'>Kommentera <i class='fa-solid fa-comments'></i></p>";
                    echo "</div>";
                    echo "<div class='p-2'>";
                    echo "<p class='shadow text-white'>Likea<i class='fa-solid fa-thumbs-up'></i></p>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>

<!-- Recension -->
            <div class="row g-4">
                <div class="card-b mb-3">
                    <i class="fa-solid fa-circle-user fa-xl"></i>
                    <p class="fw-bold mb-0">Hanna Sjöberg</p>
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Fastnade direkt! Väldigt snyggt berättad och inspirerande hela vägen.</p>

                    <p class="text-muted mb-1">14 mars 2026</p>
                      <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                        <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                    </p>
                </div>
            </div>
            </div>
        </section>

<!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="row g-4 mb-3">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i>
                        </div>
                        </p>
                        <div class="p-2">
                            <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        </p>
                    </div>
                </div>
        </section>

<!-- Recension -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="card-b mb-3">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        <p class="fw-bold mb-0">Elin Nyström</p>
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>Intressant innehåll, men hade gärna sett mer djup i vissa kapitel.</p>

                        <p class="text-muted mb-1">22 feb 2026</p>
                        <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                            <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>

<!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="row g-4 mb-3">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i>
                        </div>
                        </p>
                        <div class="p-2">
                            <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        </p>
                    </div>
                </div>
        </section>

<!-- Recension -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="card-b mb-3">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        <p class="fw-bold mb-0">Daniel Forsberg</p>

                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>Bra bok om man vill få en överblick. Lätt att läsa utan att bli tråkig.</p>

                        <p class="text-muted mb-1">9 mars 2026</p>
                        <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                            <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                    </p>

        </section>

<!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <p class="shadow text-white">Kommentera<i class="fa-solid fa-comments"></i>
                    </div>
                    </p>
                    <div class="p-2">
                        <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                    </div>
                    </p>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

    </main>
    <!-- Include footer -->
    <?php include 'assets/includes/footer.php'; ?>

</body>

</html>