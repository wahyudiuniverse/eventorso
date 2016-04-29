<?php

session_start();
require_once ("../config/config.php");

if (isset($_POST['post_name']) && $_POST['post_name'] != '') {    
    
    $token=$_SESSION['eventorso_token'];
    $id_user = $_SESSION['eventorso_iduser'];
    $name = $_POST['post_name'];
    $id_sub_service = $_POST['post_id_sub_service'];
    $capacity = $_POST['post_capacity'];
    $description = $_POST['post_description'];
    $price = $_POST['post_price'];

    $datacheck=array("");
    $querycheck="SELECT * FROM tb_brosur WHERE token='$token'";
    $res=$db->fetch_multiple_rows($datacheck,$querycheck);
    $count=$res->rowCount();
            
    $date_last_modified = date('Y-m-d H:i:s');
    $reg = new Database();

    if ($count == 0) { // if data is not in table then insert it....


        // $token = getToken(20);
        $value = $reg->add_brosur($token,$id_user,$name,$date_last_modified);
        // $_SESSION['session_token']=$token;
    } else {
    // else update the record...

        $value = $reg->update_brosur($token,$id_user,$name,$id_sub_service,$capacity,$description,$price,$date_last_modified);
    }

    echo $date_last_modified;
}
?>