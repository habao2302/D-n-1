<div class="mb ">
           <div class="boxtrai mr ">
                    <div class="row mb">
                        <div class="boxtitle">Quên mật khẩu</div>
                        <div class="boxcontent formtk">
                            <form action="index.php?act=quenmk" method="post">
                                <div class=" mb">
                                    Email
                                <input type="email" name="email"></div>
                                <input type="submit" value="Gửi" name='goiemail'>
                                <input type="reset" value="Nhập lại">
                            </form>
                            <div class="thongbao mb">
                            <?php
                               if(isset($thongbao)&& ($thongbao!='0')){
                                echo $thongbao;
                               }
                            ?>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="boxphai ">
            <?php include 'view/boxright.php'; ?>
        </div>   
</div>