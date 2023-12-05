<?php
session_start();

include "header.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "global.php";
include "model/cart.php";
include "model/taikhoan.php";
include "model/sanpham.php";
$spnew=loadall_sanpham_home();

if(!isset($_SESSION['mycart']))$_SESSION['mycart']=[];
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
                           
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky']>0)){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Bạn đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
            }
            include "view/taikhoan/dangky.php";
            break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                
                  $user=$_POST["user"];
                  $pass=$_POST["pass"];
                 $checkuser= checkuser($user,$pass);
                 if(is_array( $checkuser)){
                    $_SESSION['user']=$checkuser;
                    //  $thongbao="Đăng nhập thành công!";
                
                }else{
                  
                    $thongbao1="Đăng nhập không thành công , vui lòng kiểm tra lại tài khoản!";
                    include "login.php";
                       break;
                }
                   
                }
    
               include "home.php";
                break;
                case 'edit_taikhoan':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $id=$_POST['id'];
                       upload_taikhoana($id,$user,$pass,$email,$address,$tel);
                        $_SESSION['user']= checkuser($user,$pass);
                        header('location: index.php?act=edit_taikhoan');
                       
                        
                        }
                    include "view/taikhoan/edit_taikhoan.php";
                    break;
                    case 'quenmk':
                        if(isset($_POST['goiemail'])&&($_POST['goiemail'])){
                            $email=$_POST['email'];
                
                            $checkemail=checkemail($email);
                            if(is_array($checkemail)){
                                $thongbao='Pass của bạn :'.$checkemail['pass'];
                            }else{
                                $thongbao='email không tồn tại';
                            }
                            }
                        include "view/taikhoan/quenmk.php";
                        break;
                        case 'thoat':
                            session_unset();
                        
                            include "home.php";
                            break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id= $_GET['idsp'];
                    $onesp= loadone_sanpham($id);   
                    extract($onesp);
                    $sp_cung_loai=load_sanpham_cungloai($id, $iddm);
                    include "sanphamct.php";
                }else{
                    include "home.php";
                }
                break;

                case 'addtocart':
                    
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $img=$_POST['img'];
                        $price=$_POST['price'];
                        $soluong=1;
                        $ttien= $soluong*intval($price);
                        $spadd=[$id, $name, $img, $price, $soluong, $ttien];
                        array_push($_SESSION['mycart'], $spadd);
                        
                    }
        
                   
                    include "view/cart/viewcart.php";
                    break;  
                   
    
                   
                    case 'delcart':
                        if(isset($_GET['idcart'])){
                            array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                        
                        }else{
                            $_SESSION['mycart']=[];
                        }
                        
                      
                            include "view/cart/viewcart.php";
                      
                    break; 
                    case 'bill':
                        include "view/cart/bill.php";
                        break;         
                         
                        case 'billcomfirm':
                            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                                if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                                else $id=0;
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $tel=$_POST['tel'];
                                $pttt=$_POST['pttt'];
                                $ngaydathang = date('h:i:sa d/m/Y');
                                $tongdonhang= tongdonhang();
                                $idbill=insert_bill($iduser,$name, $email, $address, $tel,$pttt ,$ngaydathang, $tongdonhang);
                                
                                foreach($_SESSION['mycart'] as $cart){
                                    insert_cart($cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[0],$cart[5],$idbill);
                                }
                
                                $_SESSION['cart']=[];
                                
                            }
                            $bill=loadone_bill($idbill);
                            $billct=loadall_cart($idbill);
                            include "view/cart/billcomfirm2.php";
                            break;                       
                        case 'mybill':
                            $listbill=loadall_bill($_SESSION['user']['id']);
                            include "view/cart/mybill.php";
                            break;

            default:
            include "home.php";
            break;
    }}else{
        include "home.php";
    }
 
include "footer.php";  
    ?>
    