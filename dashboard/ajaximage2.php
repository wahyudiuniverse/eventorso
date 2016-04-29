<?php
// include('db.php');
session_start();
require_once ("../config/config.php");
$reg = new Database();
$path = "image_upload/";
$token = $_SESSION['eventorso_token'];

	$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg2']['name'];
			$size = $_FILES['photoimg2']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg2']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								// mysqli_query($db,"INSERT INTO tb_brosur_image (token,name_image) VALUES ('xx','$actual_image_name')");
									$value = $reg->add_brosur_image($token,$actual_image_name);

									?>

						<div class="sel-item ng-scope as-sortable-item">    
                            <div class="sel-item bg-white-i ng-hide" style="text-align:center" ng-show="item.is_loading">
                                 <div class="progress-wrapper">
                                    <div class="progress progress-border-2 progress-w-135">
                                        <div class="progress-current" ng-style="{'width' : item.caption}"></div>
                                    </div>
                                </div>
                            </div>

	                        <div class="sel-item ng-scope as-sortable-item-handle" ng-class="{'is-selected': item.is_selected}" ng-click="item['is_selected'] = !item.is_selected">
	                          <div class="sel-item-action">
	                            <div style="margin-top: 55px;" class="fileUpload btn btn-primary">
	                              <span>CHANGE</span>
	                              <input id="photoimg3" name="photoimg3" type="file" class="upload" />
	                            </div>
	                          </div>
	                          <img src="<?php echo 'image_upload/'.$actual_image_name;?>">
	                        </div>
                         </div>
<script>
$(document).ready(function(){

    // $("#show").click(function(){
        $("#hidde2").hide();
    // });
});
</script>
									<?php
									// echo "<img src='image/".$actual_image_name."'  class='preview'>";
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