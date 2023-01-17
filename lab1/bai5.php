<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1><?php
$var = -10;
// $var = (is_int($var) && $var%2==0 && )?"Là một số nguyên chẵn":"chuỗi";
// echo $var; 
if(is_string($var)){
  echo "Chuỗi";
}else{
  if(is_int($var)){
    if($var%2==0 && $var >0){
      echo "số nguyên chẵn";
    }elseif($var%2!=0 && $var >0){
      echo "số nguyên lẻ";
    }elseif($var%2!=0 && $var <0){
    echo "số âm lẻ";
  }elseif($var%2==0 && $var <0){
    echo "số âm chẵn";
  }
}
}
?></h1>
  </div>
</body>`

</html>