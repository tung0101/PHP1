<?php 
session_start(); 
        include_once "../model/config.php"; 
        include_once "../model/danhmuc.php";
        include_once "../model/sanpham.php";
        include_once "../model/binhluan.php";
        include_once "../model/user.php";
        include_once "../model/login_submit.php";
        include "../model/register_submit.php";
        include "../view/header.php"; 
        if (isset($_GET['act'])) {

            switch ($_GET['act']) {
                case 'cart':
                    include "../view/cart.php";
                    break;
                case 'sanpham':
                    include "../view/sanpham.php";
                    break;


                case 'login':
                        include "../view/login.php";
                    
                    break;

                case 'register':

                    include "../view/register.php";
                    break;
                case 'suauser':
                    include "../view/suauser.php";
                    break;

                case 'seach':
                        include "../model/seach.php";
                        break;

                case 'chitiet':
                    include "../view/chitietsp.php";
                    break;

                case 'baiviet':
                    include "../view/baiviet.php";
                    break;

                default:
                    include "../view/home.php";
                    break;
            }
        } else {
            include "../view/about.php";
        }

        include "../view/footer.php"; 
?>
