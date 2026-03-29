<?php
require_once 'assets/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Om oss</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/branding/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/branding/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/branding/favicon-16x16.png">
  <link rel="icon" href="assets/images/branding/favicon.ico">
  <link rel="manifest" href="assets/images/branding/site.webmanifest">
</head>

<body class="about-page header-page">
  <?php include 'assets/includes/header.php'; ?>
  <main class="container mt-5">

    <!-- Rubrik -->
    <h2 class="section-heading mb-4 text-center">Om oss</h2>
    <div class="section-divider" aria-hidden="true"></div>

    <!-- Introduktion -->
    <div class="row mb-5">
      <div class="col-md-8 mx-auto text-center">
        <p class="text-light fs-5">
          Wisdoom är en plattform som samlar kunskap på ett och samma ställe.
        </p>
        <p class="text-light">
          Här kan du söka bland artiklar, dokumentärer och böcker inom områden som vetenskap, historia, kultur och samhälle.<br>
          Vår ambition är att göra det enklare att hitta inspirerande och faktabaserat innehåll.<br>
          Användare kan även kan dela tankar, diskutera innehåll och ta del av andras perspektiv <br>
          - eftersom kunskap växer när den delas.

        </p>
      </div>
    </div>

    <div class="section-divider" aria-hidden="true"></div>



    <!-- Kontakt -->
    <h3 class="section-heading mb-4 text-center">Kontakta oss</h3>
    <div class="row mb-5">
      <div class="col-md-6 mx-auto text-center">
        <p class="text-light">Har du frågor eller vill samarbeta? Hör av dig till oss!</p>
        <p class="text-light">📧 kontakt@wisdoom.se</p>
      </div>
    </div>

  </main>

  <?php include 'assets/includes/footer.php'; ?>
</body>

</html>