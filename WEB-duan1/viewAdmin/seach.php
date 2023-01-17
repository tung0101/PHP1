<link rel="stylesheet" href="../view/css/ad_seach.css">
<?php

if (isset($_POST['timkiem'])) {
    $name = $_POST['filter'];
}

$sql = sanpham_seach($name);

?>
<h2>Từ khóa tìm kiếm:
    <?php $_POST['filter'] ?></h2>
<form action="" id="tim" method="POST">
    <div class="tim">
        <input type="text" name="filter" placeholder="Tìm Kiếm sản phẩm">
        <input id="timkiem" type="submit" name="timkiem" value="Tìm kiếm"></i>
        <br>
    </div>

</form>
<ul>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["filter"];
        if ($name == "") {
        } else {

            $query = sanpham_seach($name);

            if($query != null){
                echo "<h3 class=ketqua>Kết quả tìm kiếm: " . $name . "</h3>";

                foreach($query as $row) {
                    echo "<table >";

                    echo '
                                    <tr>
                                        <td>' . $row['id'] . '</td>
                                        <td><img src="../view/images/' . $row['hinh'] . '" alt=""></td>
                                        <td colspan="3" class="tensp">' . $row['tensp'] . '</td>
                                        <td>' . $row['gia'] . 'đ</td>
                                        <td>' . $row['iddanhmuc'] . '</td>
                
                                        <td class="ad"><a href="../model/suasp.php?page_layout=sua&id=' . $row['id'] . '"> <i class="bx bx-edit"></i> </a></td>
                                        <td class="ad"><a href="../model/xoasp.php?page_layout=xoa&id=' . $row['id'] . '"> <i class="bx bx-message-square-minus"></i> </a></td>
                                    </tr>
                                    ';
                    echo "</table>";
                }
            } else {
                echo "<h3 style= margin-left:30px;>Không tìm Thấy Kết quả: " . $name . " </h3>";
            }
        }
    }




    ?>
</ul>

</div>