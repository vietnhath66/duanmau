<?php
    include "../global.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/giohang.php";
    include "../model/hoadon.php";
    include "../model/thongkedm.php";
    // include "../model/thongkesp.php";
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/admin.css" />
</head>

<body>
    <div class="container">
        <!-- header -->
        <?php include "header.php"; ?>
        <!-- menu -->
        <?php include "menu.php"; ?>
        <!-- main -->
        <div class="row mt-5 main-web">
            <!-- main web -->
            <?php 
                // Controller
                if(isset($_GET['act']) && $_GET['act'] != ""){
                    $act = $_GET['act'];
                    switch($act){
                        case "thongkedm?act=trangchu":
                            include "thongke/thongkedm.php";
                            break;
                        

                        // Danh mục
                        case "dsdm":
                            $dsdm = danhsach_danhmuc();
                            include "danhmuc/list-danhmuc.php";
                            break;
                        
                        case "adddm":
                            if(isset($_POST['btnsubmit'])){
                                add_danhmuc($_POST['tendm']);
                                header("location: ?act=dsdm");
                            }
                            include "danhmuc/add-danhmuc.php";
                            break;
                        
                        case "editdm":
                            if(isset($_GET['iddm']) & $_GET['iddm'] > 0){
                                $danhmuc = getone_danhmuc($_GET['iddm']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $iddm = $_POST['iddm'];
                                $tendm = $_POST['tendm'];
                                update_danhmuc($iddm, $tendm);
                                header("location: ?act=dsdm");
                            }
                            include "danhmuc/edit-danhmuc.php";
                            break;
                        
                        case "deletedm":
                            if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                                delete_danhmuc($_GET['iddm']);
                                header("location: ?act=dsdm");
                            }
                            break;
                        
                            
                        // Thống kê danh mục
                        case "thongkedm":
                            $loadthongke_dm = load_thongke();
                            include "thongke/thongkedm.php";
                            break;
                        case "thongkesp":
                            $loadthongke_dm = load_thongke();
                            include "thongke/thongkesp.php";
                            break;

                        // Sản phẩm
                        case "dssp":
                            $dssp = danhsach_sanpham();
                            include "sanpham/list-sanpham.php";
                            break;
                        
                        case "addsp":
                            if(isset($_POST['btnsubmit'])){
                                $tensp = $_POST['tensp'];
                                $giasp = $_POST['giasp'];
                                $giamgiasp = $_POST['giamgiasp'];
                                $photo = null;
                                if($_FILES['anhsp']['name'] != ""){
                                    $photo = time() . "_" . $_FILES['anhsp']['name'];
                                    move_uploaded_file($_FILES['anhsp']['tmp_name'], "../uploads/$photo");
                                }
                                $motasp = $_POST['motasp'];
                                $danhmucsp = $_POST['danhmucsp'];
                                add_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp);
                                header("location: ?act=dssp");
                            }
                            $dsdm = danhsach_danhmuc();
                            include "sanpham/add-sanpham.php";
                            break;
                        
                        case "editsp":
                            if(isset($_GET['idsp']) & $_GET['idsp'] > 0){
                                $sanpham = getone_sanpham($_GET['idsp']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $tensp = $_POST['tensp'];
                                $giasp = $_POST['giasp'];
                                $giamgiasp = $_POST['giamgiasp'];
                                $photo = null;
                                if($_FILES['anhsp']['name'] != ""){
                                    $photo = time() . "_" . $_FILES['anhsp']['name'];
                                    move_uploaded_file($_FILES['anhsp']['tmp_name'], "../uploads/$photo");
                                }
                                $motasp = $_POST['motasp'];
                                $danhmucsp = $_POST['danhmucsp'];
                                $idsp = $_POST['idsp'];
                                update_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp, $idsp);
                                header("location: ?act=dssp");
                            }
                            $dsdm = danhsach_danhmuc();
                            include "sanpham/edit-sanpham.php";
                            break;
                        
                        case "deletesp":
                            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                                delete_sanpham($_GET['idsp']);
                                header("location: ?act=dssp");
                            }
                            break;
                        

                        // Khách hàng
                        case "dskh":
                            $dskh = loadall_taikhoan();
                            include "khachhang/list-khachhang.php";
                            break;
                        
                        case "addkh":
                            if(isset($_POST['btnsubmit'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $tel = $_POST['tel'];
                                $vaitro = $_POST['role'];
                                add_khachhang($user, $pass, $email, $address, $tel, $vaitro);
                                header("location: ?act=dskh");
                            }
                            include "khachhang/add-khachhang.php";
                            break;
                        
                        // case "updatekh":
                        //     if(isset($_GET['idkh'])&&$_GET['idkh']){
                        //       $idkh = $_GET['idkh'];
                        //       $khachhang=loadone_taikhoan($idkh);
                        //     }
                        //     $dskh = loadall_taikhoan();
                        //     include "khachhang/edit-khachhang.php";
                        //     break;
                        case "editkh":
                            if(isset($_GET['idkh']) && $_GET['idkh'] > 0){
                                $khachhang = loadone_taikhoan($_GET['idkh']);
                            }
                            if(isset($_POST['btnsubmit'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $tel = $_POST['tel'];
                                $vaitro = $_POST['role'];
                                $idkh = $_POST['idkh'];
                                update_taikhoan($user, $pass, $email, $address, $tel, $vaitro, $idkh);
                                header("location: index.php?act=dskh");
                            }
                            include "khachhang/edit-khachhang.php";
                            break;
                        
                        case "deletekh":
                            if(isset($_GET['idkh']) && $_GET['idkh'] > 0){
                                delete_taikhoan($_GET['idkh']);
                                header("location: ?act=dskh");
                            }
                            break;


                        // Quản lý đơn hàng user
                        case "qldonhang":
                            $loadhd1 = loadbill_theo_donhang1();
                            $listbill = loadbill_theo_donhang($_SESSION['user']['id']);
                            if (isset($_POST['chapnhandonhang'])) {
                                $bill_id = $_GET['bill_id'];
                                trangthai($bill_id);
                                header("Location: index.php?act=qldonhang");
                            }
                            if(isset($_POST['huydonhang'])){
                                $bill_id = $_GET['bill_id'];
                                huydonhang($bill_id);
                                header("Location: index.php?act=qldonhang");
                            } 
                            include "donhang/qldonhang.php";
                            break;
                        

                        default: {
                            include "thongke/thongkedm.php";
                            break;
                        }
                    }
                }else{
                    include "thongke/thongkedm.php";
                }
            ?>
            <?php include "top10.php"; ?>
        </div>
        <!-- footer -->
        <?php include "footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../assets/js/admin.js"></script>
    <script>
    function confirmdelete() {
    return confirm("Bạn có chắc muốn xóa không ?");
};
function confirmrestore() {
    return confirm("Bạn có chắc muốn khôi phục không ?");
};
function cofirmchapnhan() {
    return confirm("Bạn có chắc chắn xác nhận đơn hàng này không ?");
};

function cofirmcofirmhuy() {
    return confirm("Bạn có chắc chắn hủy đơn hàng này không ?");
};
 </script>
</body>
</html>