<?php
    include_once '../connexion/config.php';

    $COMING = $_POST['index'];

    if($COMING != "0") $COM =(int) $COMING;
    else $COM = $COMING;

    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $GET_INDEX = 'SELECT * FROM '.$DB_TABLE.' WHERE id = '.$COMING;

    
    if(!$CONNECTION){
        echo('<h2 style = "color : #ff3311">Failed to connect !</h2>');
    }
    elseif($COM === 0){
        echo '<h2 style = "color : #ff3311">Failed to find data at index "'.$COMING.'" !</h2>';
    }
    else{
        if(mysqli_num_rows($res = mysqli_query($CONNECTION, $GET_INDEX)) == 1){

            $line = mysqli_fetch_assoc($res);

            echo json_encode($line);
        }
        elseif(mysqli_num_rows($res = mysqli_query($CONNECTION, $GET_INDEX)) ==  0){
            echo '<h2 style = "color : #1133ff">0 result founded ! Fill and register to index '.$COMING.'</h2>';
        }
        else{
            echo '<h2 style = "color : #ff3311">Failed to collect data !</h2>';
        }
    }
?>