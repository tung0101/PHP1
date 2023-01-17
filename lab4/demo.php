<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
echo "Chuyển đổi mảng về 1 chuỗi đặc biêt hoặc ngược lại";
$coure = ["name"=>"php","number"=>"1"];
echo "<pre>";
print_r($coure);
echo "<pre>";

$result = serialize($coure);

echo "<pre>";
print_r($result);
echo "<pre>";

$new = unserialize($result);
echo "<pre>";
print_r($new);
echo "<pre>";
//
?>
</body>
</html>