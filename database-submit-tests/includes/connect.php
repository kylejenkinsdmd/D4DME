<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "vcannings");
    define("DB_PASS", "JNMTX20+mjk=");
    define("DB_NAME", "vcannings"); 

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>