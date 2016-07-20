<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "php_sql";

// Creating connection
$conn = mysqli_connect( $server, $username, $password, $database );


// Checking connection
if( !$conn ) {
    die( "Conection failed: ". mysqli_connect_error() );
}

echo "connected successfully"

?>