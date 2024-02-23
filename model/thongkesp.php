<?php
    function load_thongke(){
        $sql = "SELECT sanpham.id as madm, sanpham.name as tendm, 
        count(sanpham.id) as countsp, 
        min(sanpham.price) as minprice, 
        max(sanpham.price) as maxprice, 
        avg(sanpham.price) as avgprice
        FROM sanpham left join sanpham on sanpham.id=sanpham.id_dm group by sanpham.id order by sanpham.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

?>