<?php
$bodyClass = 'docs-page';
require_once 'assets/bootstrap.php';
// Register information to database
require_once 'assets/functions/insert.php';
// Get reviews from database
require_once 'assets/functions/select.php';
include 'assets/includes/header.php'; ?>

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
        <h2 class="visually-hidden">Introduktion</h2>
        <h1 class="articles-hero-title text-white">Populära dokumentärer</h1>
        <h2 class="articles-hero-subtitle text-white">Topplistan just nu!</h2>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- Topp 2 rutorna -->
    <section class="articles-top-section">
        <div class="container-lg">
            <h2 class="visually-hidden">Topplista dokumentärer</h2>
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

                        <img src="assets/images/documentary/doc2.png" alt="bild på dok n.1" class="article-img-large">
                        <p class="articles-card-text">En visuell resa genom jordens mest spektakulära landskap och ekosystem, från täta regnskogar till vidsträckta öknar.</p>
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

                        <img src="assets/images/documentary/doc5.png" alt="bild på dok n.2" class="article-img-large">
                        <p class="articles-card-text">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
                    </div>
                </div>

                <!-- Topp 3-6 rutorna -->
                <div class="col-md-3">
                    <div class="feature-card feature-card-small">
                        <div class="myDIV articles-small-header">
                            <span class="h4 mb-0">3:</span>
                            <img src="assets/images/documentary/doc1.png" alt="bild på dok n.3" class="article-img-small">
                        </div>
                        <div class="hide articles-hide-text">En resa genom Afrikas savanner och djurliv, där naturens balans och överlevnad står i fokus.</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card feature-card-small">
                        <div class="myDIV articles-small-header">
                            <span class="h4 mb-0">4:</span>
                            <img src="assets/images/documentary/doc4.png" alt="bild på dok n.4" class="article-img-small">
                        </div>
                        <div class="hide articles-hide-text">En dokumentär om världens största havsdjur och livet i de djupaste delarna av oceanerna.</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card feature-card-small">
                        <div class="myDIV articles-small-header">
                            <span class="h4 mb-0">5:</span>
                            <img src="assets/images/documentary/doc3.png" alt="bild på dok n.5" class="article-img-small">
                        </div>
                        <div class="hide articles-hide-text">Hur forskning och livsstil förändrar vår syn på hälsa och formar framtidens medicin.</div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-card feature-card-small">
                        <div class="myDIV articles-small-header">
                            <span class="h4 mb-0">6:</span>
                            <img src="assets/images/documentary/doc6.png" alt="bild på dok n.6" class="article-img-small">
                        </div>
                        <div class="hide articles-hide-text">En dokumentär om grizzlybjörnens liv, beteende och överlevnad.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!--Valda dokumentären-->
    <section class="articles-featured-section">
        <div class="container-lg">
            <h2 class="visually-hidden">Utvald dokumentär</h2>
            <div class="articles-featured-card">
                <img src="assets/images/documentary/doc5.png" alt="bild på dok n.2" class="articles-featured-img">
                <div class="articles-featured-content">
                    <div class="text-warning articles-featured-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h2 class="articles-featured-title">Ancient Mysteries</h2>
                    <p class="articles-featured-author">by; Rick Wilkinson</p>

                    <div class="articles-featured-buttons">
                        <button type="button" class="btn btn-outline-secondary">
                            <span class="text-danger-emphasis"><u>Läs bok</u><i class="fa-brands fa-leanpub fa-xl ms-2"></i></span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <span class="text-danger-emphasis"><u>Lyssna på bok</u><i class="fa-solid fa-volume-high fa-xl ms-2"></i></span>
                        </button>
                    </div>

                    <p class="articles-featured-description">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- Testimonial section-->
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h2>
                <p class="text-white text-left text-sucess">Recensioner</p>
            </h2>

            <a href="recension.php?source=docs" class="btn btn-sucess">
                <p class="shadow text-white text-left text-sucess"><i class="fa-solid fa-plus"></i>Skapa recension</p>
            </a>
        </div>

        <!--Show reviews from database-->
        <div class="row g-4">
            <?php
            $reviews = show_reviews($dbh, 'docs');
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
                <p class="fw-bold mb-0">Simon Åberg</p>
                <div class="text-warning">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Snyggt producerad och lätt att följa. Perfekt kvällsunderhållning.</p>

                <p class="text-muted mb-1">11 mars 2026</p>
                <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                    <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                </p>
            </div>
        </div>
    </div>

    <!-- Likea & Kommentera -->
    <div>
        <div class="container">
            <div class="row g-4 mb-3">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i></p>
                    </div>
                    <div class="p-2">
                        <h2 class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i></>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recension -->
    <div>
        <div class="container">
            <div class="row g-4">
                <div class="card-b mb-3">
                    <i class="fa-solid fa-circle-user fa-xl"></i>
                    <p class="fw-bold mb-0">Anton Håkansson</p>
                    <div class="text-warning mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>Intressant, men vissa teorier kändes lite väl spekulativa.</p>

                    <p class="text-muted mb-1">1 mars 2026</p>
                    <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                        <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Likea & Kommentera -->
    <div>
        <div class="container">
            <div class="row g-4 mb-3">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i></p>
                    </div>
                    <div class="p-2">
                        <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recension -->
    <div>
        <div class="container">
            <div class="row g-4">
                <div class="card-b mb-3">
                    <i class="fa-solid fa-circle-user fa-xl"></i>
                    <p class="fw-bold mb-0">Felicia Norén</p>

                    <div class="text-warning mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>

                    <p>Bra tempo och fina miljöer, men kunde varit mer faktabaserad.</p>

                    <p class="text-muted mb-1">24 feb 2026</p>
                    <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                        <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Likea & Kommentera -->
    <div>
        <div class="container">
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <p class="shadow text-white">Kommentera<i class="fa-solid fa-comments"></i></p>
                </div>
                <div class="p-2">
                    <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i></p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include 'assets/includes/footer.php'; ?>