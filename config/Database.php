<?php
/*  
this lib belong to patrick 
    sept 2012
*/
class Database {
  
    private $pdo;
    
    public function __construct()
    {
                try {
                    $this->pdo = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD );
                    $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                }
                catch( PDOException $e ) {
                    echo "error ". $e->getMessage();
                }
    }


    public function fetch_single_row( $dat, $sql )
    {
       if( $dat !== null )
        $data=array($dat);
            $data = array_values( $data ); // Incase it's an associative array
        $sel = $this->pdo->prepare( $sql );
        $sel->execute( $data );
        $sel->setFetchMode( PDO::FETCH_OBJ );
        $obj = $sel->fetch();
        return $obj;
    }
    
    public function fetch_multiple_rows( $data, $sql )
    {
        if( $data !== null )
            $data = array_values( $data ); // Incase it's an associative array
        $sel = $this->pdo->prepare( $sql );
        $sel->execute( $data );
        $sel->setFetchMode( PDO::FETCH_OBJ );
        return $sel;
    }

      public function fetch_all( $sql,$data=NULL )
    {
       
     if ($data!==null) {
        $dat=array_values($data);
        }
        $sel = $this->pdo->prepare( $sql );
        if ($data!==null) {
            $sel->execute($dat);
        } else {
            $sel->execute();
        }
        $sel->setFetchMode( PDO::FETCH_OBJ );
        return $sel;
    }
 

public function update_profile($id_user,$business_name,$vfullname,$vabout,$vaddress,$vcity,$vzipcode,$vmobile)
    {
      
        $ins = $this->pdo->prepare("UPDATE troopers SET business_name='$business_name',
                                                        fullname='$vfullname',
                                                        business_about='$vabout',
                                                        business_address='$vaddress',
                                                        id_city='$vcity',
                                                        area_code='$vzipcode',
                                                        mobile_phone='$vmobile'
                                    WHERE id='$id_user'");
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }


public function update_profile_setting($id_user,$vemail,$vsandi)
    {
      
        $ins = $this->pdo->prepare("UPDATE troopers SET email='$vemail',
                                                        password='$vsandi'
                                    WHERE id='$id_user'");
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }


   public function register_user($fullname,$email,$password)
    {
      
        $ins = $this->pdo->prepare("INSERT INTO troopers (fullname,email,password) 
                                    values ('$fullname','$email','$password')");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }

public function register_vendor($business_name,$service,$city,$email,$password,$veriycode)
    {
      
        $ins = $this->pdo->prepare("INSERT INTO troopers (business_name,id_service,id_city,email,password,level,activation_code) 
                                    values ('$business_name','$service','$city','$email','$password','1','$veriycode')");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }


public function add_brosur($token,$id_user,$name,$date_insert)
    {
      
        $ins = $this->pdo->prepare("INSERT INTO tb_brosur (token,id_user,brosur_name,date_insert) 
                                    values ('$token','id_user','$name','$date_insert')");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }

public function update_image_profile($iduser,$name_image)
    {
    $ins = $this->pdo->prepare("UPDATE troopers SET photo_profile='$name_image'
                                    WHERE id='$iduser'");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return $iduser;
        }
        
    }

public function add_image_profile($iduser,$name_image)
    {
      
// INSERT INTO tb_brosur_image (token,name_image) VALUES ('xx','$actual_image_name')
        $ins = $this->pdo->prepare("INSERT INTO tb_image_profile (id_user,name_image) 
                                    values ('$iduser','$name_image')");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }

public function add_brosur_image($token,$name_image)
    {
      
// INSERT INTO tb_brosur_image (token,name_image) VALUES ('xx','$actual_image_name')
        $ins = $this->pdo->prepare("INSERT INTO tb_brosur_image (token,name_image) 
                                    values ('$token','$name_image')");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }

public function update_brosur($token,$id_user,$name,$id_sub_service,$capacity,$description,$price,$date_last_insert)
    {
      
        $ins = $this->pdo->prepare("UPDATE tb_brosur SET brosur_name='$name',
                                         id_user='$id_user',
                                         id_sub_service='$id_sub_service',
                                         description='$description',
                                         capacity='$capacity',
                                         fix_price='$price',
                                         date_last_insert='$date_last_insert'
                                    WHERE token='$token'");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return "false";
        }
        
    }


public function update_brosur_publish($token)
    {
        $ins = $this->pdo->prepare("UPDATE tb_brosur SET publish='1'
                                    WHERE token='$token'");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return $token;
        }
        
    }

public function update_verifikasi($v_code)
    {
        $ins = $this->pdo->prepare("UPDATE troopers SET activation='1'
                                    WHERE activation_code='$v_code'");
        // $ins->execute( $data );
        if($ins->execute() && ($ins->rowCount()>0)){
            // echo "true";
            return "true";
        }else{
            return $v_code;
        }
        
    }


public function update($table,$dat,$id,$val)
    {
         if( $dat !== null )
            $data = array_values( $dat ); // Incase it's an associative array
        array_push($data,$val);
          //grab keys
        $cols=array_keys($dat);
          $mark=array();
        foreach ($cols as $col) {
          $mark[]=$col."=?"; 
        }
        $im=implode(', ', $mark);
        $ins = $this->pdo->prepare("UPDATE $table SET $im where $id=?");
        $ins->execute( $data );
    }


      public function delete( $table, $where,$id )
    {
        
        $data = array( $id ); 
        $sel = $this->pdo->prepare("Delete from $table where $where=?" );
        $sel->execute( $data );
    }
    public function close()
    {
        $this->pdo = null;
    }
        
    public function __destruct()
    {
        $this->pdo = null;
    }

}  

?>