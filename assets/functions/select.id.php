<?php
// Checks whether ID is available as GET
if (isset($_GET['id'])) {
// Gets specific post from database
$sql = 'SELECT * FROM review WHERE review_id = :id';
// Prepares a query
$stmt = $dbh->prepare($sql);
// Connects GET-variable with db containers
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
// Sends query to database
$stmt->execute();
// Adds all information about user to variable
$row = $stmt->fetch();
}