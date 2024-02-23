<?php

    //hàm dành cho đăng kí
    function dangki_taikhoan($user,$pass,$email,$address,$tel){
        $sql = "INSERT INTO taikhoan( `id`,`user`,`pass`,`email`,`address`,`tel`) VALUES (NULL,'$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
    
    }


    // hàm dành cho đăng nhâp 
    function checktaikhoan($email,$pass){
        $sql = "SELECT * FROM taikhoan WHERE email='".$email."' AND pass = '".$pass."'";
        $checkuser = pdo_query_one($sql);
        return $checkuser;
    }


    // hàm quên mật khẩu
    function quenmk($email){
        $sql = "SELECT * FROM taikhoan where email = '".$email."'";
        $sp = pdo_query_one($sql);
        return $sp;
    }


    // dành cho trang list tài khoản bên phía admin 
    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan WHERE 1";
        $taikhoan = pdo_query($sql);
        return $taikhoan;
    }


    // hàm delete tài khoản
    function delete_taikhoan($idkh){
        $sql = "delete FROM `taikhoan` WHERE id = $idkh";
        pdo_execute($sql);
    }


    // hàm dành cho sửa tài khoản
    function loadone_taikhoan($idkh){
        $sql = "SELECT * FROM taikhoan WHERE id='$idkh'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }


    // hàm dành cho cập nhật tài khoản
    function update_taikhoan($idkh,$user,$pass,$email,$address,$tel,$vaitro){
        $sql ="UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email',`address`='$address',`tel`='$tel',`role`='$vaitro' WHERE id='$idkh'";
        pdo_execute($sql);
    }


    // hàm add tài khoản
    function add_khachhang($user, $pass, $email, $address, $tel, $vaitro){
        $sql = "insert INTO taikhoan(`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$user', '$pass', '$email', '$address', '$tel', '$vaitro')";
        pdo_execute($sql);
    }

    
    // function danhsach_khachhang(){
    //     $sql = "select * from taikhoan";
    //     $result = pdo_query($sql);
    //     return $result;
    // }


    function getone_khachhang($idkh){
        $sql = "select * from `taikhoan` where id = $idkh";
        $result = pdo_query_one($sql);
        return $result;
    }

?>