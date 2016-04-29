<?php
// include('db.php');
session_start();
require_once ("../config/config.php");
$reg = new Database();
$path = "image_upload/";
$iduser = $_SESSION['eventorso_iduser'];

	$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								// mysqli_query($db,"INSERT INTO tb_brosur_image (token,name_image) VALUES ('xx','$actual_image_name')");
									
        						$value = $reg->update_image_profile($iduser,$actual_image_name);
        						$value2 = $reg->add_image_profile($iduser,$actual_image_name);
        						?>

                    <div id='preview' class="pic" style="width:316px; height:210px;">
                        <a href="" class="ng-isolate-scope">
                            <img style="height:210px;" class="cover-img" title="Eventorso Pic" src="image_upload/<?php echo $actual_image_name;?>">
                        </a>
                    </div>

					<!--  -->
        						<?php
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>