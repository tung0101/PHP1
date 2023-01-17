<?php
    $courses = array();
    $courses[] = "HTML";
    $courses[] = "CSS";
    $courses[] = "Javascript";
    $courses[] = "Java";

    echo "<pre>";
    print_r ($courses);

    echo "<br>";
    $length = count($courses);
    echo "Trong mang co tat ca la: " . $length;
?>