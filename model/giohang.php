<?php
    function insert_giohang($idpro,$iduser,$namesp,$price,$image,$mota,$soluong,$thanhtien){
        $sql ="INSERT INTO `giohang`( `iduser`, `idpro`, `namesp`, `price`, `image`, `mota`,`soluong`,`thanhtien`) VALUES ('$iduser','$idpro','$namesp','$price','$image','$mota','$soluong','$thanhtien')";
        pdo_execute($sql);
    }

    // hàm dành cho add giỏ hàng theo iduser
    function loadcart_theo_iduser($iduser){
        $sql ="SELECT * FROM giohang WHERE iduser='$iduser'";
        $viewcart = pdo_query($sql);
        return $viewcart;
    }


    // 2 hàm này dành cho xóa 1 sản phẩm và tất cả sản phẩm 
    function delete_theo_iduser($iduser){
        $sql = "DELETE FROM giohang WHERE iduser = '$iduser'";
        pdo_execute($sql);
    }

    function delete_theo_idpro($idpro){
        $sql = "DELETE FROM giohang WHERE idpro = '$idpro'";
        pdo_execute($sql);
    }
    function load_all_cart_count($idpro){
        $sql = "SELECT * FROM giohang Where idpro ='$idpro' ";
        $loadhd = pdo_query($sql);
        return count($loadhd);
    }
    
?>