<?php
session_start();
include_once "../model/config.php";  
include_once "../model/danhmuc.php";
include_once "../model/sanpham.php";
include_once "../model/binhluan.php";
include_once "../model/user.php";
include_once "../model/admin.php";

if(isset($_SESSION['idAdmin'])){
            include "../viewAdmin/header.php"; 
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'danhmuc':
                include "../viewAdmin/danhmuc.php";
                break;
            case 'suadanhmuc':
                include "../viewAdmin/suadanhmuc.php";
                break;
            case 'themdanhmuc':
                include "../viewAdmin/themdanhmuc.php";
                break;
    
    
            case 'sanpham':
                include "../viewAdmin/sanpham.php";
                break;
            case 'suasanpham':
                include "../viewAdmin/suasp.php";
                break;
            case 'themsanpham':
                include "../viewAdmin/themsp.php";
                break;
    
    
            case 'userAd':
                include "../viewAdmin/userAd.php";
                break;
            case 'layout_tim':
                include "../viewAdmin/layout_tim.php";
                break;
            case 'suauser':
                include "../viewAdmin/suauserAd.php";
                break;
            case 'themuser':
                include "../viewAdmin/themuser.php";
                break;
    
    
            case 'binhluan':
                include "../viewAdmin/binhluan.php";
                break;
            default:
                include "../viewAdmin/admin.php";
                break;
        }
        include "../viewAdmin/footer.php";
    } else {
        include "../viewAdmin/admin.php";
    }
    include "../viewAdmin/footer.php"; 
}else{
    include "../view/dangnhapadmin.php";
}
?>



