
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
  <?php
$group=["1"=>"Nam","2"=>"Duy","3"=>"Ngọc","4"=>"Đại","5"=>"Huy"];
$school=["FPTU"=>"Đại học FPT"
,"FPL"=>"Cao đẳng FPT"
,"IUH"=>"Đại học Công Nghiêp"
,"VL"=>"Đại học Văn Lang"
,"VH"=>"Đại học Văn Hiến"];
function create($name,$attributes,$array, $keySelect){
  $xhtml='';
  if(!empty($array)){
    $xhtml .= '<select name="'.$name.'"id="'.$name.'" style=" '.$attributes.'">';
    foreach($array as $key => $value){
      if($key==$keySelect){
        $xhtml.='<option value="'.$key.'" selected="selected">'.$value.'</option>';
      }else{
        $xhtml .='<option value="'.$key.'">'.$value.'</option>';
      }
    }
    $xhtml.='</select>';
  }
  return $xhtml;
}
$groupSelcet = create('group','width:200px',$group,3);
$schoolSelcet = create('school','width:300px',$school,"FPTU");
echo $groupSelcet.'<br><br>'.$schoolSelcet;
?>
  </div>

</body>
</html>