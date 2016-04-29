<?php

session_start();
require_once ("../config/config.php");

// if (isset($_POST['post_business_name']) && $_POST['post_business_name'] != '') {
    
    // $token=$_SESSION['eventorso_token'];
    $id_user = $_SESSION['eventorso_iduser'];
    $vemail = $_POST['post_email'];
    $vsandi = $_POST['post_sandi'];

    $date_last_modified = date('Y-m-d H:i:s');
    $reg = new Database();

        // $value = $reg->update_profile($id_user,$business_name,$fullname,$about,$address,$date_last_modified);
        $value = $reg->update_profile_setting($id_user,$vemail,$vsandi);

// }
?>