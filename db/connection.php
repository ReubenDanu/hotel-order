<?php
    // create connection to mysql database
    $CONFIG = [
        "localhost",
        "root",
        "",
        "",
        3306
    ];

    $conn = new mysqli($CONFIG[0], $CONFIG[1], $CONFIG[2], $CONFIG[3], $CONFIG[4]);
    
    if($conn->connect_error){
        die("Something went error on connection databases");
    }



?>