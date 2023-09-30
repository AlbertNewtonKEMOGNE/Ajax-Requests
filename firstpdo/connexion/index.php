<?php
    include_once './config.php';

    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if(!$CONNECTION){
        echo('<h2 style = "color : #ff3311">Failed to connect to database !</h2>');
    }
    else{
        echo '<h2 style = "color : #33ff11">Connect to database !</h2>';
    }

    mysqli_close($CONNECTION);
?>