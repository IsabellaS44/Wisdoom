<?php
// Checks wheter the delete button has been pressed
if (isset($_POST['delete'])) {
    $allowedCategories = ['books', 'articles', 'docs'];
    $category = $_POST['category'] ?? '';
    if (!in_array($category, $allowedCategories, true)) {
        $category = 'books';
    }

    $reviewId = (int) ($_POST['review_id'] ?? 0);
    if ($reviewId <= 0) {
        header('Location: remove.php?action=invalidid');
        exit();
    }

    // Creates a query
    $sql = '
DELETE FROM review
WHERE review_id = :id
';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers
    $stmt->bindValue(':id', $reviewId, PDO::PARAM_INT);
    // Sends query to database
    if ($stmt->execute()) {
        header('Location: ' . $category . '.php?action=deleted');
        exit();
    }
}
