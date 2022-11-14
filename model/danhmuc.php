<?php
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO tbl_category(name) VALUES('$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM tbl_category WHERE id=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc(){
        $sql = "SELECT * FROM tbl_category order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danhmuc($id){
        $sql = "SELECT * FROM tbl_category WHERE id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id, $tenloai){
        $sql = "UPDATE tbl_category SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
    
?>