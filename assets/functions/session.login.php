<?php
// Checks if submit button is clicked
if (isset($_POST['login'])) {

    // Checks that e-mail and password fields are not empty
    if (empty($_POST['email']) || empty($_POST['password'])) {
        //Redirect user to error page
        header('Location: ../../index.php?action=empty');
        exit();
    }
    // Trims the e-mail and password
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //Creates, prepares, binds and executes a query
    $sql = '
    SELECT *
    FROM users
    WHERE email = :email
    AND password = :password 
    ';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    //Counts rows returned from database
    $count = $stmt->rowCount();

    //Checks wether user exists in database
    if ($count > 0) {
        //Save results to variable
        $row = $stmt->fetch();
        // Creates session variables with user id
        $_SESSION['user_id'] = $row['user_id'];
        //Redirect user to success page
        header('Location: ../../index.php');
        exit();
    } else {
        //Redirect user to error page
        header('Location: ../../index.php?action=error');
        exit();
    }
}
