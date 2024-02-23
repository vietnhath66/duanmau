<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/giohang.php";
    include "../model/cart.php";
    include "../model/khachhang.php";
    include "../model/hoadon.php";
    include "../model/binhluan.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/user.css" />
</head>

<body>
    <div class="container">
        <!-- header -->
        <?php include "_header.php";?>
        <!-- menu -->
        <?php include "_menu.php";?>

        <!-- main -->
        <?php 
            // Các biến chung
            $dssp = danhsach_sanpham();
            $dsdm = danhsach_danhmuc();
            $top10 = top10_sanpham_luotxem();
            // Controller
            if(isset($_GET['act']) && $_GET['act'] != ""){
                $act = $_GET['act'];
                switch($act){
                    case "login":
                        if(isset($_POST['dangnhap'])&& $_POST['dangnhap']){
                            $email = $_POST['email'];
                            $pass = $_POST['pass'];
                            $taikhoan = checktaikhoan($email,$pass);
                            if(is_array($taikhoan)){
                                $_SESSION['user'] = $taikhoan;
                                $thongbao = "Đăng nhập thành công!";
                            } else {
                                $thongbao = "Tài khoản không có! Vui lòng kiểm tra lại!!!";
                            }
                        }

                        include "login.php";
                        break;
                    
                    case "dangky":
                        if(isset($_POST['dangky'])&& $_POST['dangky']){
                            // $user = $_POST['user'];
                            // $pass = $_POST['pass'];
                            // $email = $_POST['email'];
                            // $address = $_POST['address'];
                            // $tel = $_POST['tel'];
                            // dangki_taikhoan($user,$pass,$email,$address,$tel);
                            // $thongbao = "Đăng ký thành công!!!
                            // <a href='?act=dangky'>Đăng nhập</a>";
                        
                        if (empty($_POST['user'])) {
                            $error_user = "Không được bỏ trống trường này";
                        } else {
                            $user = $_POST['user'];
                        }
    
                        if (empty($_POST['email'])) {
                            $error_email = "Không được bỏ trống trường này";
                        } else {
                            $email = $_POST['email'];
                        }
    
                        if (empty($_POST['pass'])) {
                            $error_pass = "Không được bỏ trống trường này";
                        } else {
                            $pass = $_POST['pass'];
                        }

                        if (empty($_POST['address'])) {
                            $error_address = "Không được bỏ trống trường này";
                        } else {
                            $address = $_POST['address'];
                        }

                        if (empty($_POST['tel'])) {
                            $error_tel = "Không được bỏ trống trường này";
                        } else {
                            $tel = $_POST['tel'];
                        }
                        
    
                        // if (empty($_POST['repassword'])) {
                        //     $error_repass = "Không được bỏ trống trường này";
                        // } else if ($_POST['repassword'] != $_POST['password']) {
                        //     $error_repass = "Không đúng định dạng password";
                        // }
    
                        if (!isset($error_user) && !isset($error_email) && !isset($error_pass) && !isset($error_address) && !isset($error_tel)) {
                            dangki_taikhoan($user,$pass,$email,$address,$tel);
                            $thongbao = "<span style='color: red'>Đăng ký tài khoản thành công</span>";
                        } else {
                            echo "";
                        }
                    }
                        include "register.php";
                        break;
                    case "detailsp": {
                        // if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                        //     $sanpham = getone_sanpham($_GET['idsp']);
                        //     $sanpham_lq = sanpham_cungloai($_GET['idsp']);
                        //     tangluotxem($_GET['idsp']);
                        // }
                        if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                            $sanpham = getone_sanpham($_GET['idsp']);
                            //danhf rieeng cho tawng luowjt xem
                            tangluotxem($_GET['idsp']);
                            $sp_cungloai = sanpham_lienquan($_GET['idsp']);
                          }
                        include "detail.php";
                        break;
                    }
                    case "deletecart":
                        $iduser = $_SESSION['user']['id'];
                        if(isset($_GET['idpro'])&& $_GET['idpro']){
                            $idpro = $_GET['idpro'];

                            delete_theo_idpro($idpro);
                        }
                        $user = loadcart_theo_iduser($iduser);
                        include "cart.php";
                        break;
                    case "dangxuat":
                        if(session_unset()){
                            $thongbao = "<h1 class'anh'>Đăng xuất thành công!!!</h1>";
                        }
                        include "viewacc.php";
                        break;
                    case "addtocart": 
                        // // lấy dữ liệu từ form để lưu vào giỏ hàng
                        // if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        //     $id=$_POST['id'];
                        //     $name=$_POST['name'];
                        //     $image=$_POST['image'];
                        //     $price=$_POST['price'];

                        //     //khởi tạo mảng con trước khi đưa vào giỏ hàng
                        //     $item=array($id,$name,$image,$price,);
                        //     $_SESSION['giohang'][]=$item;
                        //     header('location: index.php?act=addtocart');
                        // }

                        $iduser = $_SESSION['user']['id'];
                        if(isset($_POST['addtocart'])&& $_POST['addtocart']){
                            $idpro = $_POST['id'];
                            $namesp = $_POST['name'];
                            $mota =$_POST['mota'];
                            $image = $_POST['image'];
                            $price = $_POST['price'];
                            $soluong=$_POST['soluong'];
                            $thanhtien=$soluong*$price;
                            insert_giohang($idpro,$iduser,$namesp,$price,$image,$mota,$soluong,$thanhtien);
                            // $spadd = [$idpro, $namesp, $price, $soluong, $thanhtien];

                        //     $check = false;
                        //     $key = 0;
                        //     $item = [];
                        //     foreach($_SESSION['giohang'] as $k => $item){
                        //         if($item[1] == $id ){
                        //             $item[4]= $item[4]+1;
                        //             $item[5] = $item[4] *$item[3];
                        //             $check = true;
                        //             $key =$k;
                        //             $itemTam = $item;
                        //             break;
                        //         }
                        //     }
                        //     if($check){
                        //         $_SESSION['giohang'][$key] = $itemTam;
                        //     } else {
                        //         array_push($_SESSION['giohang'], $spadd);
                        //     }
                        }

                        $user = loadcart_theo_iduser($iduser);   
                        // echo "<pre>";
                        // var_dump($_SESSION['giohang']);
                        // die;
                        //view giỏ hàng lên 
                        include "cart.php";
                        break;
                    
                    case "thanhtoan":
                        $iduser = $_SESSION['user']['id'];
                        $loadcart = loadcart_theo_iduser($iduser);
                        include "thanhtoan.php";
                        break;
                    case "hoadon":
                        $iduser = $_SESSION['user']['id'];
                        if((isset($_POST['hoadon']))&& isset($_POST['hoadon'])){
                            // if(isset($_SESSION['user'])){
                                // $iduser = $_SESSION['user']['id'];
                            // } else $id = 0;
                            // lấy dữ liệu 
                            $tongdonhang = $_POST['tongdonhang'];
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $pttt = $_POST['pttt'];
                            $madh = "VLXRY".rand(0,999999);
                            $ngaytao = date('h:i:sa d/m/Y');
                            // tạo đơn hàng và trả về 1 id đơn hàng
                            $iddh = taohoadon($madh,$tongdonhang,$pttt,$iduser,$name,$address,$email,$tel,$ngaytao);
                        }
                        $loadhd = loadbill_theo_donhang($iddh);
                        include "hoadon.php";
                        break;
                        case "donhangacc":
                            $loadhd1 = loadbill_theo_donhang1();
                            $listbill = loadbill_theo_donhang($_SESSION['user']['id']);
                            if(isset($_POST['huydonhang']) && $_POST['huydonhang']){
                                $bill_id = $_GET['bill_id'];
                                xoadonhang($bill_id);
                                // header("Location: index.php?act=donhangacc");
                            }
                            include "donhangacc.php";
                            break;

                    case "thongtintk":
                        include "viewacc.php";
                        break;

                    case "timkiemkyw":
                        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                             
                            $kyw = $_POST['kyw'];
                        } else {
                            $kyw = "";
                        }
                        if (isset($_GET['iddm'])&&$_GET['iddm']>0) {
                            $iddm = $_GET['iddm'];
                        } else {
                            $iddm = 0;
                        }
                          
                        $dstk = loadall_sanpham2($kyw, $iddm);
                        $tendm = loadsp_theo_ten_danhmuc($iddm);
                        // $dssp = timkiem_danhmuc($iddm);
                        include "home.php";
                        break;
                    case "searchdm":{
                        if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                            $dssp = sanpham_themdanhmuc($_GET['iddm']);
                        }
                        include "home.php";
                        break;
                    }
                    default: {
                        include "home.php";
                        break;
                    }
                }
            }else{
                include "home.php";
            }
        ?>

        <!-- footer -->
        <?php include "_footer.php";?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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