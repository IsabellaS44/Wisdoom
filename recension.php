<?php
//start session
require_once 'assets/bootstrap.php';
//Show errors for debugging
require_once 'assets/includes/display_errors.php';
//Include database connection
require_once 'assets/config/db.php';
//Register information to database
require_once 'assets/functions/insert.php';
//Include header
require_once 'assets/includes/header.php';
?>
  <main>
    <?php
    // selects the source from the dropdown and checks if it's valid, if not defaults to books
    $allowedSources = ['books', 'articles', 'docs'];
    $selectedSource = $_GET['source'] ?? 'books';
    if (!in_array($selectedSource, $allowedSources, true)) {
      $selectedSource = 'books';
    }

    if (isset($_GET['action'])) {
      switch ($_GET['action']) {
        case 'success':
          echo '
                 <div class="alert alert-success" role="alert">
                    Din recension har skickats in!
                 </div>';
          break;
        case 'notloggedin':
          echo '
                 <div class="alert alert-warning" role="alert">
                    Du måste vara inloggad för att kunna skicka en recension.
                 </div>';
          break;
        case 'error':
          echo '
                 <div class="alert alert-danger" role="alert">
                    Det gick inte att skicka in din recension, försök igen!
                 </div>';
          break;
      }
    }
    ?>
    <!-- Review form -->
    <section class="Recension container py-5 mb-5">
      <?php if (!isset($_SESSION['user_id'])): ?>
        <div class="alert alert-info" role="alert">
          Logga in för att skapa en recension.
        </div>
      <?php else: ?>
      <form action="recension.php" method="post">
      <!-- Choose category -->
        <div class="mb-4">
          <select class="form-select" id="category" name="source" required>
            <option value="" disabled selected>Välj kategori</option>
            <option value="books">Böcker</option>
            <option value="articles">Artiklar</option>
            <option value="docs">Dokumentärer</option>
          </select>
        </div>
        <div class="review-card p-4">
          <h1 class="mb-4">Recension</h1>
          <div class="d-flex align-items-center gap-3 mb-4">
            <!-- Stars for rating(non functional) -->
            <div class="text-warning fs-2">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="mb-0">Välj din rating</p>
          </div>
          <div class="mb-4">
            <input type="text" class="form-control" id="review_title" placeholder="Titel på recension" name="review_title" required>
            <p class="text-sm-end">Max 70 ord</p>
          </div>
          <div class="mb-4">
            <textarea class="form-control" placeholder="Din recension" id="review_content" style="height: 400px" name="review_content" required></textarea>
            <p class="text-sm-end">Max 500 ord</p>
          </div>
          <div class="d-flex justify-content-end my-2">
            <button type="reset" class="btn btn-danger mx-4" name="avbryt">Avbryt</button>
            <button type="submit" class="btn btn-success" name="dela">Dela</button>
          </div>
        </div>
      </form>
      <?php endif; ?>
    </section>
  </main>
  <!-- Include footer -->
  <?php include 'assets/includes/footer.php'; ?>
  