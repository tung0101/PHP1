<?php
    $array=array(
        array('time'=>'dong ho','gia'=>80),
        array('book'=>'de men phieu luu ky','gia'=>100),
        array('moive'=>'Arcade','gia'=>120),
    );

    $_SESSION['array']=$array;
    echo '<pre>';
     print_r($_SESSION['array']['time']);
     echo '</pre>';
     echo '<pre>';
     print_r($_SESSION['array'][0]['gia']);
     echo '</pre>';

?>