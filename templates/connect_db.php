<?php
    //check connection
    $conn = mysqli_connect('localhost', 'sonny', 'Igacgecko@2k19', 'learn');

    if(!$conn){
        echo 'server not connected';
    }
?>