<div class=" container">

<div class="row frmtitle"><h1>DANH SÁCH BÌNH LUẬN</h1></div>
<div class="row frmcontent">
  
            <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NỘI DUNG</th>
                        <th>ID USER</th>
                        <th>ID PRO</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>THAO TÁC</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $suabl = "index.php?act=suabl&id=".$id;
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a>  <a href="'. $xoabl.'"><input type="button" value="Xóa"></a></td>
                          </tr>';
                        };

                    ?>
                    </tbody>
                  </table>
                </div>
                </div>
                <div class=" mb">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                </div>
            
            </div>
        </div>
        </div>        