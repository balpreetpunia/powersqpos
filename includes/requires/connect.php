<?php


define('DB_HOST', 'den1.mysql3.gear.host');
define('DB_USER', 'powersq');
define('DB_PASS', 'Ac45_8F_rn4T');
define('DB_NAME', 'powersq');



    //connecting to mysql database
    $con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Checking if any error occured while connecting
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }




