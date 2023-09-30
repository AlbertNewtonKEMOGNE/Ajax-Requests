<?php
    include_once '../connexion/config.php';


    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $SELECT = 'SELECT * FROM '.$DB_TABLE.'';

    
    if(!$CONNECTION){
        echo('<h2 style = "color : #ff3311">Failed to connect !</h2>');
    }
    else{
        echo '<h2 style = "color : #33ff11">Connect to database !</h2>';

        if(mysqli_num_rows($res = mysqli_query($CONNECTION, $SELECT))> 0){

            
            echo '<table style = "border-collapse : collapse; text-align : center; border : 1px solid #112299">';
            echo '<tr style=" padding : 3%">';
            echo '<th style="border : 1px solid #112299; padding : 3%">'.$TABLE_FILL1.'</th>';
            echo '<th style="border : 1px solid #112299; padding : 3%">'.$TABLE_FILL2.'</th>';
            echo '<th style="border : 1px solid #112299; padding : 3%">'.$TABLE_FILL3.'</th>';
            echo '<th style="border : 1px solid #112299; padding : 3%">'.$TABLE_FILL4.'</th>';
            echo '<th style="border : 1px solid #112299; padding : 3%">'.$TABLE_FILL5.'</th>';
            echo '</tr>';

            while($line = mysqli_fetch_assoc($res)){
                echo '<tr style=" padding : 3%"><td style = "border : 1px solid #112299; padding : 5%">'.$line[$TABLE_FILL1].'</td>';
                echo '<td style = "border : 1px solid #112299; padding : 5%">'.$line[$TABLE_FILL2].'</td>';
                echo '<td style = "border : 1px solid #112299; padding : 5%">'.$line[$TABLE_FILL3].'</td>';
                echo '<td style = "border : 1px solid #112299; padding : 5%">'.$line[$TABLE_FILL4].'</td>';
                echo '<td style = "border : 1px solid #112299; padding : 5%">'.$line[$TABLE_FILL5].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        elseif(mysqli_num_rows($res = mysqli_query($CONNECTION, $SELECT)) ==  0){
            echo '<h2 style = "color : #1133ff">0 result founded !</h2>';
        }
        else{
            echo '<h2 style = "color : #ff3311">Failed to collect data !</h2>';
        }
    }

?>