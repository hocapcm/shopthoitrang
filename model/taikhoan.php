<?php
 function insert_taikhoan($user,$password,$email){
    $sql = "INSERT INTO tbl_user(user,password,email) VALUES('$user','$password','$email')";
    pdo_execute($sql);
}

function checkuser($user,$password){
    $sql = "SELECT * FROM tbl_user WHERE user='".$user."' AND password='".$password."'";
    $sp = pdo_query_one($sql);
    return $sp;
}




function loadall_taikhoan(){
    $sql = "SELECT * FROM tbl_user order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id){
    $sql = "DELETE FROM tbl_user WHERE id=".$id;
    pdo_execute($sql);
}

function loadone_taikhoan($id){
    $sql = "SELECT * FROM tbl_user WHERE id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}

function update_taikhoan($id,$user,$password,$email,$address,$tel){
    $sql = "UPDATE tbl_user SET user='".$user."', password='".$password."', email='".$email."', address='".$address."' , tel='".$tel."' WHERE id=".$id;
    pdo_execute($sql);
}
function update_taikhoan1($id,$user,$password,$email,$address,$tel,$role){
    $sql = "UPDATE tbl_user SET user='".$user."', password='".$password."', email='".$email."', address='".$address."' , tel='".$tel."' , role='".$role."'WHERE id=".$id;
    pdo_execute($sql);
}

?>