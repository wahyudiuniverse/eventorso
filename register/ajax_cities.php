<?php
  require_once ("../config/config.php");

    // $data=array($email,$password);
    // $query="SELECT * FROM troopers WHERE email='$email' AND PASSWORD='$password'";
$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM tb_cities WHERE city_name LIKE (:keyword) ORDER BY city_name ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
    // put in bold the written text
    $city_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['city_name']);
    // add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['city_name']).'\')">'.$city_name.'</li>';
}
?>