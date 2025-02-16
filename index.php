<?php
    session_start();
    include ('./model/config.php');
    include ('./model/taikhoan.php');
    include "./dao/pdo.php";
?>

<?php include './layout/header.php';
 if(!isset($_GET['action'])){
    $_GET["action"] = "trangchu";
 }
?>


<?php switch ($_GET["action"]) {
    case 'trangchu':
        include './view/trangchu.php';
        break;
    case 'gioithieu':
        include './view/gioithieu.php';
        break;
    case 'sanpham':
        include './view/sanpham.php';
        break;
    case 'tuyendung':
        include './view/tuyendung.php';
        break;
    case 'tintuc':
        include './view/tintuc.php';
        break;
    case 'lienhe':
        include './view/lienhe.php';
        break;
    case 'dangnhap':
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $tendangnhap=$_POST['tendangnhap'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($tendangnhap,$pass);
            if(is_array($checkuser)){
                $_SESSION['tendangnhap']=$checkuser;
                // $thongbao="Đăng nhập thành công";

                header('location: index.php');
                
            } else {
                $thongbao="Tài khoản không tồn tại vui lòng đăng ký tài khoản";
            }
        }
        include './view/dangnhap.php';
        break;
    case 'dangky':
        if(isset($_POST['dangky'])&&($_POST['dangky'])){
            $email=$_POST['email'];
            $tendangnhap=$_POST['tendangnhap'];
            $pass=$_POST['pass'];
            $tel=$_POST['tel'];
            insert_taikhoan($email,$tendangnhap,$pass,$tel);
            $thongbao="Đăng ký tài khoản thành công";
        }
        include './view/dangky.php';
        break;
    case 'giohang':
        include './view/giohang.php';
        break;
    default:
        include './view/trangchu.php';
        break;
}

?>

<?php include './layout/footer.php' ?>