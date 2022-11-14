<?php
ob_start(); 
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "model/binhluan.php";
    include "view/header.php";
    include "global.php";

    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    if((isset($_GET['act'])) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp']>0)){
                    $sanpham1=loadone_sanpham($_GET['idsp']);
                    $dssanphamcungloai=loadall_sanpham_cungloai("",$sanpham1['idcate']);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                
                break;

            case 'dssanpham':            
                $kyw = "";
                $idcate = 0;
                $listsanpham1 = loadall_sanpham($kyw,$idcate);
                
                include "view/dssanpham.php";
                break;

                
            case 'sanphamtheodm':         
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                   $idcate = $_GET['iddm']; 
                }else{
                    $idcate = 0;
                }
                $listsanpham2 = loadall_sanpham($kyw,$idcate);   
                include "view/sanphamtheodm.php";
                break;

            case 'dangky':
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    insert_taikhoan($user,$password,$email);
                    $thongbao = "Bạn đã đăng ký tài khoản thành công";
                }
                include "view/useraccount/dangky.php";
                break;

            case 'dangnhap':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $checkuser = checkuser($user,$password);
                    if(is_array(($checkuser))){
                        $_SESSION['user'] = $checkuser;
                        header('Location: index.php');
                    }else{
                       
                    }
                }
                include "view/useraccount/dangnhap.php";
                break;
                case 'edittaikhoan':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $user = $_POST['user'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $id = $_POST['id'];
                        update_taikhoan($id,$user,$password,$email,$address,$tel);
                        $_SESSION['user'] = checkuser($user,$password);
                        header('Location: index.php?act=edittaikhoan');
                    }
                    include "view/useraccount/edittaikhoan.php";
                    break;
            
            
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;

            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
   
    include "view/footer.php";
    ob_end_flush();
?>