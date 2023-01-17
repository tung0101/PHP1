<?php
echo"Mảng <br>";
$course = array("PHP","JAVA","HTML","CSS");
echo"<pre>";
print_r($course);
echo"<pre>";
echo"thêm phần tử vào cuối mảng <br>";
echo $length = array_push($course,"RUBY","Js");
echo"<pre>";
print_r($course);
echo"<pre>";
echo"thêm phần tử vào đầu mảng <br>";
echo $newarr = array_unshift($course,"C++");
echo"<pre>";
print_r($course);
echo"<pre>";
echo"đảo ngược phần tử của mảng <br>";
echo $newarr = array_reverse($course);
echo"<pre>";
print_r($newarr);
echo"<pre>";
echo"đảo key - value mảng <br>";
echo $newarr = array_flip($course);
echo"<pre>";
print_r($newarr);
echo"<pre>";
?>
<br>
<?php
$arr_so = array(2,3,4,5);
$sum=array_sum($course);
$max=max($course);
$min=min($course);
$count=count($arr_so);
print_r($sum);
echo"<br>";
print_r($max);
echo"<br>";
print_r($min);
$average=$sum/$count;
echo"$average";
?>