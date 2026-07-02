<?php
$serverName = "rds-demotest.ct5qzsdocv04.us-east-1.rds.amazonaws.com,1433";

$connectionOptions = array(
    "Database" => "rds-demotest",   
    "Uid" => "admin",
    "PWD" => "o1KLz63fJEW9faQuaWoC",
    "Encrypt" => true,
    "TrustServerCertificate" => true
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>