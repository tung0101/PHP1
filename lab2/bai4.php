<?php
    $course = ["HTML", "CSS", "Javascript","Java"];

    if(!empty($course)) {
        foreach($course as $keys => $value) {
            echo $value . "<br />";
        }
    }else {
        echo "Không có";
    }
?>