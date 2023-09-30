<?php
    include_once '../connexion/config.php';

    $INDEX = $_POST['index'];

    $INPUT2 = $_POST['first_name'];
    $INPUT3 = $_POST['name'];
    $INPUT4 = $_POST['email'];
    $INPUT5 = $_POST['contact'];

    $UPDATE = 'UPDATE '.$DB_TABLE.' SET '.$TABLE_FILL2.' = "'.$INPUT2.'", '
        .$TABLE_FILL3.' = "'.$INPUT3.'", '.$TABLE_FILL4.' = "'.$INPUT4.'", '
        .$TABLE_FILL5.' = "'.$INPUT5.'" WHERE '.$TABLE_FILL1.' = '.$INDEX.'';

    $CONNECTION = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $CREATE_TABLE = 'CREATE  TABLE IF NOT EXISTS ank_users(id INT PRIMARY KEY AUTO_INCREMENT, first_name VARCHAR(90), user_name VARCHAR(90), email  VARCHAR(90), contact VARCHAR(14))';

    $INSERT = 'INSERT INTO ank_users(id , first_name, user_name, email  , contact) VALUES (null,"'.$INPUT2.'","'.$INPUT3.'","'.$INPUT4.'","'.$INPUT5.'")';
    
    if(!$CONNECTION){
        echo('<h2 style = "color : #ff3311">Failed to connect to database !</h2>');
    }
    else{
        echo '<h2 style = "color : #33ff11">Connect to database !</h2>';

        if(mysqli_query($CONNECTION, $CREATE_TABLE)){

            echo '<h2 style = "color : #33ff11">Succeed to create Table in Database</h2>';
            
            if($INDEX == "m"){

                if(mysqli_query($CONNECTION, $INSERT)){

                    echo '<h1 style = "color : #33ff11">Recorded !</h1>';
            
                }
                else{
                    echo '<h2 style = "color : #ff3311">Failed to record !</h2>';
                }

            }
            else{
                if(mysqli_query($CONNECTION, $UPDATE)){
                    echo '<h1 style = "color : #33ff11">User update !</h1>';
                }
                else{
                    echo '<h2 style = "color : #ff3311">Failed to update user !</h2>';
                }
            }
        }
        else{
            echo '<h2 style = "color : #ff3311">Failed to create Table !</h2>';
        }
    }

?>