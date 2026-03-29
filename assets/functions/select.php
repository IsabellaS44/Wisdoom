<?php
// Show reviews from the database
function show_reviews($dbh, $category)
{
    $sql = '
    SELECT review.*, users.firstname, users.lastname
    FROM review
    LEFT JOIN users ON users.user_id = review.user_id
    WHERE review.category = :category
    ORDER BY review.created_at DESC
    ';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':category', $category, PDO::PARAM_STR);
    $stmt->execute();

    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $reviews;
}
