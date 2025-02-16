<?php
    session_start();
    include "./layout/header.php";

?>

<?php 
 if(!isset($_GET['action'])){
    $_GET["action"] = "home";
 }
?>


<?php switch ($_GET["action"]) {//xác định action và include trang tương ứng
    case 'home':
        include './view/home.php';
        break;
    case 'danhmuc':
        include './view/danhmuc/add.php';
        break;    
    case 'editdm':
        include './view/danhmuc/edit.php';
        break;
    case 'listdm':
        include './view/danhmuc/list.php';
        break;
    case 'sanpham':
        include './view/sanpham/add.php';
        break;
    case 'editsp':
        include './view/sanpham/edit.php';
        break;
    case 'listsp':
        include './view/sanpham/list.php';
        break;
    case 'lienhe':
        include './view/lienhe.php';
        break;
    case 'taikhoan':
        include './view/taikhoan.php';
        break;
    case 'donhang':
        include './view/donhang.php';
        break;
    default:
        include './view/home.php';
        break;
}

?>
