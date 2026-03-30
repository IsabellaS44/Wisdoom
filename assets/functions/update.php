<?php
// connect to database
require_once 'assets/config/db.php';
// category validation and update process
if (isset($_POST['modify'])) {
    $allowedCategories = ['books', 'articles', 'docs'];
    $category = $_POST['category'] ?? '';
    if (!in_array($category, $allowedCategories, true)) {
        $category = 'books';
    }

    $sql = 'UPDATE review SET review_title = :review_title, review_content = :review_content WHERE review_id = :id';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':review_title', $_POST['review_title']);
    $stmt->bindValue(':review_content', $_POST['review_content']);
    $stmt->bindValue(':id', (int) $_POST['review_id'], PDO::PARAM_INT);

    try {
        $stmt->execute();
        header('Location: ' . $category . '.php?action=success');
        exit();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
