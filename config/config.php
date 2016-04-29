<?php
ini_set( "display_errors", true );
define( "DB_DSN", "mysql:host=localhost;dbname=eventorsodb" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates/" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ARTICLE_IMAGE_PATH", "images/articles" );
define( "IMG_TYPE_FULLSIZE", "fullsize" );
define( "IMG_TYPE_THUMB", "thumb" );
define( "ARTICLE_THUMB_WIDTH", 120 );
define( "JPEG_QUALITY", 85 );

require_once ('Database.php');
require_once ('My_pagination.php');

$db=new Database();
$pg=New My_pagination();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

function connect() {
    return new PDO('mysql:host=localhost;dbname=eventorsodb', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

set_exception_handler( 'handleException' );
?>
