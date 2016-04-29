<?php

session_start();
require_once ("../config/config.php");

// if (isset($_POST['post_business_name']) && $_POST['post_business_name'] != '') {
    
    // $token=$_SESSION['eventorso_token'];
    $id_user = $_SESSION['eventorso_iduser'];
    $business_name = $_POST['post_business_name'];
    $vfullname = $_POST['post_fullname'];
    $vabout = $_POST['post_about'];
    $vaddress = $_POST['post_address'];
    $vcity = $_POST['post_city'];
    $vzipcode = $_POST['post_zip'];;
    $vmobile = $_POST['post_mobile'];

    $date_last_modified = date('Y-m-d H:i:s');
    $reg = new Database();

        // $value = $reg->update_profile($id_user,$business_name,$fullname,$about,$address,$date_last_modified);
        $value = $reg->update_profile($id_user,$business_name,$vfullname,$vabout,$vaddress,$vcity,$vzipcode,$vmobile);

// }
?>