<?php
    $connect = mysqli_connect('localhost', 'root', '', 'qluser');

    if(!$connect) {
        die('<h3>Fail</h3>');
    }

    echo '<h3>Success</h3>';

    // $database = mysqli_query($connect, 'SHOW DATABASES');
    $database = mysqli_query($connect, 'SHOW TABLES FROM qluser');

    // while($row = mysqli_fetch_object($database)) {
    //     echo '<p>' .$row->Database . '</p>';
    // }

    while($row = mysqli_fetch_array($database)) {
        // echo "<pre>";
        echo $row[0] . "<br>";
    }

    mysqli_close($connect);
?>