<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $productname=$name ;
    $productid=$id;
    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80' >";
        }else{
        echo 'no pho to';} ; 

?>
<div class="container">
            <div class="row frmtitle"><h1>CẬP NHẬP LOẠI HÀNG HÓA</h1></div>
        </div>
        <div class="row frmcontent">
            <div class="container">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="mb">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                        //    extract($danhmuc);
                        if($iddm==$danhmuc['id']) $s ="selected"; else $s="";
                           echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                        }
                        ?>
                </select>
                </div>
                <div class=" mb">
                <label for="">Tên sản phẩm</label><br>
                <div class="form-group">
                <input type="text" name="tensp" value="<?php echo $productname?>" id="" class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Giá</label><br>
                <div class="form-group">
                <input type="text" name="giasp"  value="<?php echo $price ?>" id="" class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Hình ảnh</label><br>
                <div class="form-group">
                <input type="file" name="img" id="" >
                <?=$hinh?>
                </div>
                </div>
                <div class=" mb">
                <label for="">Mô tả</label><br>
                <div class="form-group">
               <textarea name="mota" id="" class="form-control" cols="30" rows="10"><?php echo $mota ?></textarea>
                </div>
                </div>
                <div class=" mb">
                    <input type="hidden" name= "id" value="<?=$id?>">
                    <input type="submit" name="capnhatsp" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;

                ?>
            </form>
            </div>
        </div>
    </div>