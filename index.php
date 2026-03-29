<?php
require_once 'assets/bootstrap.php';
require_once 'assets/includes/header.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisdoom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

<body class="index-page">
 <main>
<?php if (isset($_GET['action'])): ?>
<section class="pt-5">
    <div class="container text-center">
      <?php
      // Checks what action is set to
      switch ($_GET['action']) {
        case 'empty':
          echo '
            <div class="alert alert-warning">
                Du har inte angett en e-postadress eller lösenord.
            </div>
            ';
          break;
        case 'error':
          echo '
            <div class="alert alert-danger">
                Du har angett fel e-postadress eller lösenord.
            </div>
            ';
          break;
        case 'logout':
          echo '
            <div class="alert alert-danger">
                Du har loggats ut.
            </div>
            ';
          break;
      }
      ?>
    </div>
  </section>
<?php endif; ?>
    <!-- Toppkarusell -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/carousel/carouseldok2.jpg" class="carouselimg" alt="Carousel documentary ad">
          </a>
        </div>
        <div class="carousel-item">
          <img src="assets/images/carousel/carouselbok3.jpg" class="carouselimg" alt="Carousel book ad">
          </a>
        </div>
        <div class="carousel-item">
          <img src="assets/images/carousel/carouselart4.jpg" class="carouselimg" alt="Carousel article ad">
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>

  <!-- Kategorier -->
  <section class="container mt-5 categories-layout">

    <!-- Böcker -->
    <div class="category-section">
      <h2 class="section-heading category-title"><a href="books.php" class="text-decoration-none text-reset">Böcker <span class="heading-hint">Visa alla →</span></a></h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/books/bok5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Naturens mysterier</h5>
              <p class="card-text">En bok om naturens fascinerande fenomen och de komplexa ekosystem som formar livet på jorden.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/books/bok10.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Revolutionary Science</h5>
              <p class="card-text">En historisk genomgång av idéer och upptäckter som förändrat vår förståelse av världen.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/books/bok7.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Archaeology and Discovery</h5>
              <p class="card-text">En introduktion till arkeologiska fynd som avslöjar historien om mänskliga civilisationer.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/books/bok3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stora upptäckter som förändrade världen</h5>
              <p class="card-text">En bok om de viktigaste vetenskapliga upptäckterna och hur de har påverkat samhället.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- Dokumentärer -->
    <div class="category-section">
      <h2 class="section-heading category-title"><a href="docs.php" class="text-decoration-none text-reset">Dokumentärer <span class="heading-hint">Visa alla →</span></a></h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/documentary/doc6.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Realm of the Grizzly</h5>
              <p class="card-text">En dokumentär om grizzlybjörnens liv, beteende och överlevnad.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/documentary/doc2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Visions of Earth</h5>
              <p class="card-text">En visuell resa genom jordens mest spektakulära landskap och ekosystem, från täta regnskogar till vidsträckta öknar.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/documentary/doc5.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ancient Mysteries</h5>
              <p class="card-text">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/documentary/doc4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ocean Giants</h5>
              <p class="card-text">En dokumentär om världens största havsdjur och livet i de djupaste delarna av oceanerna.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>

    <div class="section-divider" aria-hidden="true"></div>

    <!-- Artiklar -->
    <div class="category-section">
      <h2 class="section-heading category-title"><a href="articles.php" class="text-decoration-none text-reset">Artiklar <span class="heading-hint">Visa alla →</span></a></h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="assets/images/articles/art1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Molecular Biology</h5>
              <p class="card-text">En genomgång av nya upptäckter inom molekylärbiologi och hur genetiska strukturer påverkar cellers funktion och utveckling.</p>
            </div>
             </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=10" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Microbiological Research</h5>
                  <p class="card-text">Artikeln undersöker mikroorganismer och deras betydelse för sjukdomar, ekosystem och medicinsk forskning.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=11" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Data Science & AI</h5>
                  <p class="card-text">En analys av hur artificiell intelligens och dataanalys används inom forskning och teknisk utveckling.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=12" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Climate & Environmental Science</h5>
                  <p class="card-text">En studie av globala klimatförändringar och de vetenskapliga insatser som görs för en mer hållbar framtid.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
  </section>
  <?php include 'assets/includes/footer.php'; ?>
</body>

</html>