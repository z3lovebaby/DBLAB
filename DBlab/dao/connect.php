<?php
    $host = 'localhost';
    $port = "5432";
    $username = 'postgres';
    $password = 'postgres';
    $dbname = 'dblab';
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password} ";
    $dbconn = pg_connect($connection_string);
    if (!$dbconn) {
    echo "An error occurred.\n";
    exit;
}
?>

