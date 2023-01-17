<?php
session_start();


$ini_array = parse_ini_file("../model/users.ini");

$john = $ini_array['john'];

$john=explode("|",$john);

$peter = $ini_array['peter'];

$peter =explode("|",$peter);


$mary = $ini_array['mary'];

$mary=explode("|",$mary);



if (isset($_POST['submit'])) {
    $_SESSION['submit']=[$john,$peter,$mary];
$ten = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$a = false;
$idname ;
// $_SESSION['dk']= ["ho"=>$ho,"ten"=>$ten,"username"=>$username,$password];
print_r($_SESSION['subit']);
for ($i=0; $i < count($_SESSION['submit']) ; $i++) { 

if ($username == $_SESSION['submit'][$i][0]&& $password ==$_SESSION['submit'][$i][1]  ) {
    $idname = $_SESSION['submit'][$i][2];
     $a = true;
}

   
}
if ($a == true) {
    $_SESSION['submit'] = $idname;
    // print_r( "idname: ".$_SESSION['dk']);
   header("location: ../view/info.php");
}
else{
 header("location: ../controller/login.php");
}

}
?>
