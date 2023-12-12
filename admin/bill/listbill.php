<div class=" container">

<div class="row frmtitle"><h1>DANH SÁCH ĐƠN HÀNG</h1></div>
<form action="index.php?act=listbill" method="post">
<div class="row frmcontent">
  
            <div class="container">
                <div class="bang">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>THAO TÁC</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($listbill as $bill){
                            extract($bill);
                            $kh=$bill["bill_name"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_address"].'
                            <br> '.$bill["bill_tel"];
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            $suadh = "index.php?act=suabl=".$id;
                            $xoadh = "index.php?act=xoabl=".$id;
                            echo ' <tr>
                            <td><input type="checkbox"></td>
                            <td>DAM-'.$bill['id'].'</td>
                            <td>'.$kh.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$total.'</td>
                            <td>'.$ttdh.'</td>
                            <td>'.$bill["ngaydathang"].'</td>
                            <td><a href="'.$suadh.'"><input type="button" value="Sửa"></a>  <a href="'. $xoadh.'"><input type="button" value="Xóa"></a></td>
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
            </form>
        </div>
        </div>        