<?php
require_once 'assets/bootstrap.php';
// Delete information from database
require_once 'assets/functions/delete.php';
// Get specific information about user
require_once 'assets/functions/select.id.php';
//inlude header
require_once 'assets/includes/header.php';
?>
<main>
  <!-- Confirmation form for deleting a review -->
   <div class ="container py-5 mb-5 text-white page-shell">
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
  <!-- Include footer -->
   <?php include 'assets/includes/footer.php'; ?>
