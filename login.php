<?php
include "config.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM Users WHERE Email = ? AND Password = ?";

$params = array($email, $pass);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo "<h2>Login Successful!</h2>";
} else {
    echo "<h2>Invalid Email or Password!</h2>";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>