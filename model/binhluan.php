<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="INSERT INTO binhluan(`noidung`,`iduser`,`idpro`,`ngaybinhluan`) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql = "SELECT * FROM binhluan where idpro='".$idpro."'";
        $bl = pdo_query($sql);
        return $bl;
    }

    function tatca_binhluan(){
        $sql = "SELECT * FROM binhluan";
        $bl = pdo_query($sql);
        return $bl;
    }

    function delete_binhluan($id){
        $sql = "DELETE FROM  binhluan WHERE id='$id'";
        pdo_execute($sql);
    }
?>