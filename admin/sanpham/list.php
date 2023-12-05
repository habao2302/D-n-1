<div class="container">
<div class="row frmtitle"><h1>DANH SÁCH HÀNG HÓA</h1></div>
<div class="row frmcontent">
  <div class="mb">
  <div class="row  dsach frtimk">
        <form action="index.php?act=listsp" method="post">
    <input type="text" name="kyw"  placeholder=" Nhập Tên Danh Mục">
    <select name="iddm" >
      <option value="0" selected>Tất cả</option>
    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                           
                    };

                    ?>
             
    </select>
    <input type="submit" name="listok" value="Tìm Kiếm">
    </div>

  </form></div>
            <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Lượt Xem</th>
                        <th>Thao Tác</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$id;
                            $xoasp = "index.php?act=xoasp&id=".$id;
                            $hinhpath = "../upload/".$img;
                            if(is_file($hinhpath)){
                              $hinh="<img src ='".$hinhpath."' height ='60'>";
                            }else{
                              $hinh="no photo";

                            } ;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>  <a href="'. $xoasp.'"><input type="button" value="Xóa"></a></td>
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
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            
            </div>
        </div>
        </div>