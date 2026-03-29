<?php
require_once 'assets/bootstrap.php';
// Delete information from database
require_once 'assets/functions/delete.php';
// Get specific information about user
require_once 'assets/functions/select.id.php';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>Wisdoom</title>
  <!--CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
      <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/branding/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/branding/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/branding/favicon-16x16.png">
  <link rel="icon" href="assets/images/branding/favicon.ico">
  <link rel="manifest" href="assets/images/branding/site.webmanifest">
</head>
<body class="header-page edit-page page-shell">
  <?php include 'assets/includes/header.php'; ?>
  <main>
    <div class ="container py-5 mb-5">
    <h1 class="mb-4">Radera recension</h1>  
    <form action="remove.php" method="post">
        <div class="mb-4">
            <p>Är du säker på att du vill radera denna recension?</p>
            <p><?php echo ucwords($row['review_title']); ?></p>
            <p><?php echo ucwords($row['review_content']); ?></p>
            <input type="hidden" name="review_id" value="<?php echo $row['review_id']; ?>">
        </div>
        <button class="btn btn-danger" type="submit" name="delete">
            <i class="fa-solid fa-trash-can"></i> Radera
        </button>
    </form>
    </div>
  </main>
  <?php include 'assets/includes/footer.php'; ?>
</body>
</html>