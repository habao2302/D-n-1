<div class="mb  ">
           <div class="  boxtrai mr ">
                    <div class="row mb mr">
                        <div class="boxtitle">Cập nhập tài khoản</div>
                        <div class="boxcontent formtk ">
                            <?php
                                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                }
                            ?>
                            <form action="index.php?act=edit_taikhoan" method="post">
                                <div class="row mb">
                                    Email
                                <input type="email" name="email" value="<?=$email?>"></div>
                                <div class="row mb">
                                    Tên đăng nhập
                                <input type="text" name="user" value="<?=$user?>"></div>
                                <div class=" row mb">
                                    Mật khẩu
                                <input type="password" name="pass"value="<?=$pass?>"></div>
                                <div class="row mb">
                                    Địa chỉ
                                <input type="text" name="address"value="<?=$address?>"></div>
                                <div class="row mb">
                                    Số điện thoại
                                <input type="text" name="tel"value="<?=$tel?>"></div>
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="submit" value="Cập nhập" name='capnhat'>
                                <input type="reset" value="Nhập lại">
                            </form>
                            <?php
                               if(isset($thongbao)&& ($thongbao!='')){
                                echo $thongbao;
                               }
                            ?>
                        </div>
                    </div>
            </div>
       
</div>