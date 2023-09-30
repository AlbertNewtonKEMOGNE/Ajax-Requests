<?php

    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $CREATE_TABLE = 'CREATE  TABLE ank_users(id INT AUTO_INCREMENT, first_name VARCHAR(90), user_name VARCHAR(90), email  VARCHAR(90), contact VARCHAR(14))';

    if(mysqli_query($CONNECTION, $CREATE_TABLE)){

        echo '<h2 style = "color : #33ff11">Succeed to create Table in Database</h2>';
    }
    else{
        echo '<h2 style = "color : #ff3311">Failed to create Table !</h2>';
    }
?>