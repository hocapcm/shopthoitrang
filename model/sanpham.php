<?php
    function insert_sanpham($tensp,$giasp,$hinh,$des,$idcate){
        $sql = "INSERT INTO tbl_product(name,price,img,des,idcate) VALUES('$tensp','$giasp','$hinh','$des','$idcate')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM tbl_product WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham_home(){
        $sql = "SELECT * FROM tbl_product WHERE 1 ORDER BY id DESC LIMIT 0,9"; 
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_cungloai($kyw,$idcate){
        $sql = "SELECT * FROM tbl_product WHERE 1"; 
        if($kyw != ""){
            $sql .= " and name like '%".$kyw."%'";
        }
        if($idcate > 0 ){
            $sql .= " and idcate = '".$idcate."'";
        }
        $sql .= " order by id desc limit 0,6";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw,$idcate){
        $sql = "SELECT * FROM tbl_product WHERE 1"; 
        if($kyw != ""){
            $sql .= " and name like '%".$kyw."%'";
        }
        if($idcate > 0 ){
            $sql .= " and idcate = '".$idcate."'";
        }
        $sql .= " order by id desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql = "SELECT * FROM tbl_product WHERE id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id,$idcate,$tensp,$giasp,$des,$hinh){
        if($hinh != "")
            $sql = "UPDATE tbl_product SET idcate='".$idcate."', name='".$tensp."', price='".$giasp."', des='".$des."', img='".$hinh."' WHERE id=".$id;
        else
            $sql = "UPDATE tbl_product SET idcate='".$idcate."', name='".$tensp."', price='".$giasp."', des='".$des."' WHERE id=".$id;
        pdo_execute($sql);
    }
    
?>