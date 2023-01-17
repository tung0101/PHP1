<?php
$group=array("1"=>"Nam","2"=>"Duy","3"=>"Ngọc","4"=> "Duy","5"=>"Hải");
$school=["FPTU"=>"Đại học FPT"
,"FPL"=>"Cao đẳng FPT"
,"IUH"=>"Đại học Công Nghiêp"
,"VL"=>"Đại học Văn Lang"
,"VH"=>"Đại học Văn Hiến"];
echo'<select name="Words">'; 
foreach($group as $word){ 
    echo'<option value="'.$word.'">'.$word.'</option>'; 
} 
echo'</select>'; 

echo'<select name="Words">'; 
foreach($school as $let=>$word){ 
    echo'<option value="'.$let.'">'.$word.'</option>'; 
} 
echo'</select>'; 
?>