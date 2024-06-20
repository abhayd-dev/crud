<?php
define('DB_HOST','127.0.0.1:3308');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','test_db');

define('SHOW_CONN',TRUE);


    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($conn) {
    
    if (SHOW_CONN == TRUE) {
        echo 'connection succesfully';
    }
}












?>