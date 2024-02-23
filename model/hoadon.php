<?php
    function taohoadon($madh,$tongdonhang,$pttt,$iduser,$name,$address,$email,$tel,$ngaytao){
        // $conn = pdo_get_connection();
        // $sql = "insert INTO donhang(madh,tongdonhang,name,address,email,tel,pttt) VALUES ('$madh','$tongdonhang','$name','$address','$email','$tel','$pttt')";
        $sql ="INSERT INTO `donhang`( `madh`, `tongdonhang`, `pttt`,`iduser`,`name`,`address`, `email`, `tel`,`ngaytao`) VALUES ('$madh','$tongdonhang','$pttt','$iduser','$name','$address','$email','$tel','$ngaytao')";
        return pdo_execute_return_lastInsertId($sql);

        // $conn->exec($sql);
        // $last_id = $conn->lastInsertId();
        // return $last_id;
        // pdo_execute($sql);
    }
    function loadbill_theo_donhang($iddh){
        $sql ="SELECT * FROM donhang WHERE id='$iddh'";
        $viewdh = pdo_query_one($sql);
        return $viewdh;
    }
    function loadbill_theo_donhang1(){
        $sql ="SELECT * FROM donhang";
        $viewdh = pdo_query($sql);
        return $viewdh;
    }
    
    function load_all_bill($iduser){
        $sql = "SELECT * FROM donhang Where id='$iduser'";
        if ($iduser > 0) {
            $sql .= " AND iduser ='$iduser' ";
        }
        $sql .= " order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function trangthai($bill_id){
        $sql = "UPDATE donhang SET trangthai = trangthai +1 WHERE id='$bill_id'";
        pdo_execute($sql);
    }
    function huydonhang($bill_id){
        $sql = "UPDATE donhang SET trangthai = 3 WHERE id='$bill_id'";
        pdo_execute($sql);
    }
    function xoadonhang($bill_id){
        $sql = "DELETE FROM `donhang` WHERE id ='$bill_id'";
        pdo_execute($sql);
    }
    function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đang vận chuyển";
            break;
        case '2':
            $tt = "Hoàn thành";
            break;
        case '3':
            $tt = "Đã huỷ";
            break;
        // case '4':
        //     $tt = "Đơn hàng đã hủy";
        //     break;
        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}

?>