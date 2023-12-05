<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl= loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    


<div class="row mb">
               
                <div class="boxcontent2 ">
                    <table>
                        <?php
                             foreach($dsbl as $bl){
                                extract($bl);
    
                              
                               
                             
                                echo'<div class="m-4  usercmt">
                                <div style="   width:max-content;" class="user1 m-3  ">
                                    <i class="fas fa-user">  </i>Name '.$iduser.'
                                    <li style=" padding-2px;  margin-left:5px; border-bottom:0.1rem solid black">
                                   ' .$noidung.'  '.$ngaybinhluan.'
                                    </li>
                                    </div>
                                </div>';
                                
                             }
                        ?>
                        
                    </table>
                </div>
                <div class="boxfooter binhluanform">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <input type="hidden" name="idpro" value="<?=$idpro?>">
                        
                        <input style="border:1px black solid;"  type="text" name="noidung" placeholder="">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </form>
                </div>
                <?php
               
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung = $_POST['noidung'];
                    $idpro = $_POST['idpro'];
                    $noidung = $_POST['noidung'];
                    $iduser=$_SESSION['user']['id'];
                    $ngaybinhluan = date('h:i:sa d/m/Y');
                    insert_binhluan($noidung , $iduser, $idpro , $ngaybinhluan);
                   header("Location: ".$_SERVER['HTTP_REFERER']);
                }

                ?>
            </div>
</body>
</html>