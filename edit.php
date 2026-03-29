<?php
require_once 'assets/bootstrap.php';
//Get specific post from database
require_once 'assets/functions/select.id.php';
//Process update to database
require_once 'assets/functions/update.php';
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

<body class="header-page edit-page page-shell">
    <?php include 'assets/includes/header.php'; ?>
    <main>
        <div class="container py-5 mb-5">
            <h1 class="mb-4">Redigera recension</h1>
            <form action="edit.php" method="post">
                <div class="row mb-3">
                    <label for="title" class="col-1 col-form-label">Titel</label>
                    <div class="col-4">
                        <input type="text" class="form-control" id="title" name="review_title"
                            value="<?php echo $row['review_title']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="content" class="col-1 col-form-label">Recension</label>
                    <div class="col-4">
                        <input type="text" class="form-control" id="content" name="review_content" value="<?php
                                                                                                            echo $row['review_content']; ?>">
                    </div>
                </div>
                <input type="hidden" name="review_id" value="<?php echo $row['review_id']; ?>">
                <button class="btn btn-primary" type="submit" name="modify">Spara ändringar</button>
        </div>
        </form>
    </main>
    <?php include 'assets/includes/footer.php'; ?>
</body>

</html>