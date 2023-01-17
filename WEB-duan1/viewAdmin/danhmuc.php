<div class="main">
    <main>
        <h2 style="text-align: center;">Danh Sách Danh Mục</h2>
        <?php
            echo "<table >";
            echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
            echo '
                        <tr>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>

                        <td class="them" colspan="2"> <a href="../controller/indexAdmin.php?act=themdanhmuc">
                        <i class="bx bx-import"></i>   Thêm</a> </td>
                        </tr>
                    ';
            echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>

                    </tr>
                ';
            echo '
                     <tr>
                        <th>ID</th>
                        <th colspan="2">Tên Danh Mục</th>
                        <th colspan="2">Tính Năng</th>
                    </tr>
                    ';

          $query = danhmuc_showAll();
          foreach($query as $row){
            extract($row);
            $dellink="../controller/indexAdmin.php?act=danhmuc&iddanhmuc=".$iddanhmuc;
                    echo '
                    <tr>
                        <td>' . $iddanhmuc . '</td>
                        <td colspan="2">' . $tendanhmuc . '</td>
                        <td class="ac"><a href="../controller/indexAdmin.php?act=suadanhmuc&id=' . $iddanhmuc . '"> <i class="bx bx-edit"></i> </a></td>
                        <td class="ad"><a onclick="return Del()" href="'.$dellink.'"> <i class="bx bx-message-square-minus"></i> </a></td>
                    </tr>
                    ';
          }
            echo "</table>";
            if(isset($_GET['iddanhmuc'])){
                danhmuc_delete($iddanhmuc);
                echo "<script>alert('Xoá Danh mục thành công')</script>";
            }
        ?>
    </main>
</div>