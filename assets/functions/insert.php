<?php
if (isset($_POST['register'])) {
    // Create query
    $sql = '
    INSERT INTO users (firstname, lastname, email, password, regdate)
    VALUES (:firstname, :lastname, :email, :password, NOW())
    ';
    // Prepare query
    $stmt = $dbh->prepare($sql);

    //Connects form with db container
    $stmt->bindValue(':firstname', $_POST['firstname']);
    $stmt->bindValue(':lastname', $_POST['lastname']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':password', $_POST['password']);

    //Sends query to database
    try {
        $stmt->execute();
        header('Location: register.php?action=success');
        exit();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
// Checks whether the review submission button has been pressed
if (!isset($_POST['dela'])) {
    return;
}

// Checks if the user is logged in, if not redirects to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../recension.php?action=notloggedin');
    exit();
}

$reviewTitle = trim($_POST['review_title'] ?? '');
$reviewContent = trim($_POST['review_content'] ?? '');

if ($reviewTitle === '' || $reviewContent === '') {
    header('Location: ../../recension.php?action=empty');
    exit();
}

// Creates a query
$sql = '
INSERT INTO review (user_id, category, review_title, review_content, created_at)
VALUES (:user_id, :category, :review_title, :review_content, NOW())
';

// Prepares a query
$stmt = $dbh->prepare($sql);

// Connects form fields with db containers
$stmt->bindValue(':user_id', (int) $_SESSION['user_id'], PDO::PARAM_INT);
$stmt->bindValue(':category', $_POST['source'] ?? '', PDO::PARAM_STR);
$stmt->bindValue(':review_title', $reviewTitle, PDO::PARAM_STR);
$stmt->bindValue(':review_content', $reviewContent, PDO::PARAM_STR);

// Sends query to database
if ($stmt->execute()) {
    header('Location: ../../recension.php?action=success');
    exit();
}

header('Location: ../../recension.php?action=error');
exit();