<link rel="stylesheet" href="../view/css/chitietsp.css">
<?php
session_start();
include "../model/config.php";
include_once "../model/binhluan.php";
if (isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['avata'])) {
    if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        $name = $_SESSION['name'];
        $avt = $_SESSION['avata'];
    } else {
        $user = "";
        $name = "";
        $avt = "";
    }

    if (isset($_POST['gui'])) {
        $name = $_POST['name'];
        $idsp = $_POST['idsp'];
        $noidung = $_POST['noidung'];
        $iduser = $_SESSION['id'];
        $date = $_POST['date'];
        $hinh = $_POST['hinh'];

        if ($idsp != "" && $noidung != "" && $iduser != "") {
            add_binhluan($iduser, $idsp, $noidung, $hinh, $date, $name);
            echo "<script>alert('Gửi bình luận thành công')</script>";
        } else {
            echo "<script>alert('Gửi bình luận thành công')</script>";
        }
    }
?>
    <div class="binhluan">
        <form action="" method="POST">
            <h4>THÊM ĐÁNH GIÁ</h4>
            <div class="user">
                <img src="../view/images/<?= $avt ?>" alt="">
                <input type="hidden" name="hinh" value="<?= $avt ?>">
                <input type="hidden" name="name" value="<?= $name ?>">
                <input type="hidden" name="idsp" value="<?= $_GET['idsp'] ?>">
                <input type="hidden" name="date" value="<?php echo date("d/m/Y"); ?>">
                <textarea name="noidung" id="" cols="30" rows="5"></textarea>
            </div>
            <input type="submit" value="Gửi" name="gui">
        </form>
        <?php
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
            $showbinhluan = binhluan_showChiTiet($idsp);
            // extract($showbinhluan);

            foreach ($showbinhluan as $row) {
                echo '  
                <div class="showbinhluan">
                                    <div class="user">
                                        <img src="../view/images/' . $row['hinh'] . '" alt="">
                                        <div class="thongtinbl">
                                            <span class="bl_name">' . $row['name'] . '</span>
                                            <span>-</span> 
                                            <span class="">' . $row['postdate'] . '</span><br><br>
                                            <span class="bl_noidung">' . $row['noidung'] . '</span>
                                        </div>
                                    </div>
                                </div>
            ';
            }
        }
        ?>


    </div>
<?php } else {
    if (isset($_GET['idsp'])) {
        $idsp = $_GET['idsp'];
        $showbinhluan = binhluan_showChiTiet($idsp);

        foreach ($showbinhluan as $row) {
            echo '  
                <div class="showbinhluan">
                                    <div class="user">
                                        <img src="../view/images/' . $row['hinh'] . '" alt="">
                                        <div class="thongtinbl">
                                            <span class="bl_name">' . $row['name'] . '</span>
                                            <span>-</span> 
                                            <span class="">' . $row['postdate'] . '</span><br><br>
                                            <span class="bl_noidung">' . $row['noidung'] . '</span>
                                        </div>
                                    </div>
                                </div>
            ';
        }
    }
} ?>