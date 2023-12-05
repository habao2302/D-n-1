<div style='margin-top:200px;' class="mb margin-top:200px;">
        <div class="boxtrai mr">
                    <div class="row mb">
                        <div class="boxtitle">ĐƠN HÀNG CỦA TÔI</div>
                        <div class="boxcontent" >
                        <table class="table table-bordered" >
                            <thead>
                        <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(is_array($listbill)){
                        foreach($listbill as $bill){
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr>
                            <td>DAM-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                            </tr>';
                        }
                    }
                    ?>
                    </tbody>
                
                        </table>


                        </div>
                    </div>
                
                    
                </div>
            
            

