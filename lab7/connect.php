<?php
    $connect = mysqli_connect('localhost', 'root', '', 'qluser');

    if(!$connect) {
        die('<h3>Fail</h3>');
    }

    echo '<h3>Success</h3>';

    // $database = mysqli_query($connect, 'SHOW DATABASES');
    $table = mysqli_query($connect,'CREATE TABLE account (stt INT NOT NULL AUTO_INCREMENT,ho VARCHAR(255) NULL,ten VARCHAR(255) NULL, money INT NULL, PRIMARY (stt));');

    if(! $table){

        // die ('khong the tao co so du lieu:'.mysqli_error());
    }
    echo "tao bang duoc thanh cong \n";
    

    // while($row = mysqli_fetch_object($database)) {
    //     echo '<p>' .$row->Database . '</p>';
    // }

    while($row = mysqli_fetch_array($database)) {
        // echo "<pre>";
        echo $row[0] . "<br>";
    }

    mysqli_close($connect);
?>