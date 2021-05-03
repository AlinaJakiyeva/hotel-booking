
<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phpmyadmin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

    exit('Error: ' . mysqli_connect_error());
}




if ($stmt = $con->prepare('SELECT id, password FROM users WHERE email = ?')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();

    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();
    if ($_POST['password'] === $password) {
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id'] = $id;
        header('Location: attract.html');
    } else {
        echo 'Incorrect email and/or password!';
    }
} else {
    echo 'Incorrect email and/or password!';
}


    $stmt->close();
}

?>


