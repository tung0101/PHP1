<?php
    $course = ["HTML", "CSS", "Javascript","Java"];

    if(!empty($course)) {
        for ($i = 0; $i < count($course); $i++) {
            echo "<pre>";
            echo $course[$i];
        }
    }else {
        echo "Không có";
    }
?>