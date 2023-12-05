<?php

function insert_sanpham($tensp, $giasp , $hinh , $mota , $iddm){
    $sql=" INSERT INTO sanpham(name, price, img , mota, iddm) VALUES ('$tensp', '$giasp' , '$hinh' , '$mota' , '$iddm')";  
    pdo_execute($sql);
}

function delete_sanpham($id){
    $sql= "DELETE  FROM sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home() {
    $sql = "SELECT * FROM sanpham WHERE 1 order by id desc limit 0,4";
    
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10() {
    $sql = "SELECT * FROM sanpham WHERE 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw, $iddm) {
    $sql = "SELECT * FROM sanpham WHERE 1 ";
    if (!empty($kyw)) {
        $sql .= "AND name LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= "AND iddm = '" . $iddm . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham where id=".$id;
            $sp=pdo_query_one($sql);
            return $sp;
}
function load_sanpham_cungloai($id , $iddm){
    $sql = "SELECT * FROM sanpham where iddm=".$iddm." AND id <>".$id;
            $sp=pdo_query($sql);
            return $sp;
}

// function update_sanpham($id,$iddm,$tensp, $giasp, $mota, $hinh){
//     if($hinh!=""){
//     $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."' WHERE id=$id";
//      }else{
//     $sql = "UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."' WHERE id=$id";
//      }
//      pdo_execute($sql);
// }
function update_sp($id, $iddm, $tensp, $giasp, $mota, $hinh){
    if($hinh != ""){
        $sql = "UPDATE sanpham SET iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$mota."', img = '".$hinh."' WHERE id =".$id;
    } else {
        $sql = "UPDATE sanpham SET iddm = '".$iddm."', name = '".$tensp."', price = '".$giasp."', mota = '".$mota."' WHERE id =".$id;
    }
    pdo_execute($sql);
}

function load_ten_dm($iddm){
    if($iddm>0){
    $sql = "SELECT * FROM danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
    }else{
        return "";
    }}
// Trong file sanpham.php hoặc model của bạn


function load_sp_dm($id, $iddm) {
    // Bắt đầu câu truy vấn SQL
    $sql = "SELECT * FROM sanpham WHERE iddm = " . $iddm . " AND id <> " . $id;

    // Thêm điều kiện để chỉ lấy sản phẩm cùng danh mục (iddm=24)
    $sql .= " AND iddm = 24";

    // Sắp xếp kết quả theo ID giảm dần và giới hạn chỉ lấy 4 sản phẩm
  
    $sql .= " ORDER BY id DESC LIMIT 4";
    // Thực hiện truy vấn SQL và lấy danh sách sản phẩm
    $sp = pdo_query($sql);

    // Trả về danh sách sản phẩm
    return $sp;
}

function load_sp_dm_23($id, $iddm) {
    // Bắt đầu câu truy vấn SQL
    $sql = "SELECT * FROM sanpham WHERE iddm = " . $iddm . " AND id <> " . $id;

    // Thêm điều kiện để chỉ lấy sản phẩm cùng danh mục (iddm=23)
 

    // Sắp xếp kết quả theo ID giảm dần và giới hạn chỉ lấy 4 sản phẩm
  

    // In ra câu truy vấn để kiểm tra
   

    // Thực hiện truy vấn SQL và lấy danh sách sản phẩm
    $sp = pdo_query($sql);

    // In ra kết quả để kiểm tra
   

    // Trả về danh sách sản phẩm
    return $sp;
}



?>