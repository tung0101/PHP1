<?php
    $course = array();
    $course["SV001"] = ["name" => "Nam", "gt" => "Nam", "score" => [1,2,3]];
    $course["SV002"] = ["name" => "Huy", "gt" => "Nam", "score" => [4,5,6]];
    $course["SV003"] = ["name" => "Lan", "gt" => "Nữ", "score" => [7,8,9]];
    foreach($course as $keys => $value) {
        $name = $value["name"];
        $gt = $value["gt"];
        $score = array_sum($value["score"]);
        echo "Tên: " .$name . " " . "Giới Tính: " . $gt . " " . "Điểm trung bình: " . $score;
        echo "<br>";
    }
?>