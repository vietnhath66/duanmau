<?php 
    function danhsach_danhmuc(){
        $sql = "select * from danhmuc";
        $result = pdo_query($sql);
        return $result;
    }

    function add_danhmuc($tendm){
        $sql = "insert INTO danhmuc(`name`) VALUES ('$tendm')";
        pdo_execute($sql);
    }

    function getone_danhmuc($iddm){
        $sql = "select * from danhmuc where id = $iddm";
        $result = pdo_query_one($sql);
        return $result;
    }

    function update_danhmuc($iddm, $tendm){
        $sql = "update danhmuc SET name='$tendm' WHERE id = $iddm";
        pdo_execute($sql);
    }

    function delete_danhmuc($iddm){
        $sql = "delete from danhmuc where id = $iddm";
        pdo_execute($sql);
    }
?>