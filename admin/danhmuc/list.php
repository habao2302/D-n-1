<div class=" container">
<div class="row frmtitle"><h1>-</h1></div>
<div class="row frmtitle"><h1>DANH SÁCH DANH MỤC</h1></div>
<div class="row frmcontent">
  
            <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=".$id;
                            $xoadm = "index.php?act=xoadm&id=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>  <a href="'. $xoadm.'"><input type="button" value="Xóa"></a></td>
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            
            </div>
        </div>
        </div>        