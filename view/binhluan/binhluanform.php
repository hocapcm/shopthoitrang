<?php
    $idpro = $_REQUEST['idpro'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    





    <div class="" id="binhluan">
        <ul>


        </ul>
    </div>
    <p>asdas</p>
    <p><b>Viết bình luận</b></p>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <textarea name="msg" ></textarea>
        <input type="text" name="noidung">
        <input type="button" value="Submit" name="guibinhluan">
    </form>

<?php
if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
    $noidung = $_POST['noidung'];
    $iduser = $_SESSION['user']['id'];
    $ngaybinhluan = date('d M Y');
    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
}


?>


    </body>
</html>
