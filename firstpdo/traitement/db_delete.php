<?php
    include_once '../connexion/config.php';

    $COMING = $_POST['index'];

    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $DELETE = 'DELETE FROM '.$DB_TABLE.' WHERE id = '.$COMING;

    
    if(!$CONNECTION){
        echo('<h2 style = "color : #ff3311">Failed to connect !</h2>');
    }
    else{

        if(mysqli_query($CONNECTION, $DELETE)){

            echo '<h2 style = "color : #33ff11">Succeed to delete index '.$COMING.'</h2>';
        }
        else{
            echo '<h2 style = "color : #ff3311">Failed to delete index '.$COMING.'</h2>';
        }
    }

?>