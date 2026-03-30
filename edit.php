<?php
require_once 'assets/bootstrap.php';
//Get specific post from database
require_once 'assets/functions/select.id.php';
//Process update to database
require_once 'assets/functions/update.php';
//Include header
require_once 'assets/includes/header.php';
?>
    <main class="edit-page page-shell">
        <div class="container py-5 mb-5 text-white">
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
            </form>
        </div>
    </main>
    <!-- Include footer -->
    <?php include 'assets/includes/footer.php'; ?>