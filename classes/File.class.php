<?php
require_once('/var/www/html/websha/load.php');

Load::LoadClass();
class File
{
    public static function upload_file()
    {

        if(isset($_FILES['file'])){
            $errors= array();
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_type = $_FILES['file']['type'];
            $file_ext= pathinfo($file_name, PATHINFO_EXTENSION);
            
          
        
            $extensions= array("c","cpp","py","php");
        
            if(in_array($file_ext,$extensions)=== false){
                echo "<script>alert('The File you uploaded will not be supported');</script>";
                die();
                //  $errors[]="The File you uploaded will not be supported";
            }
           
            if ($file_ext !== Code::dropdown_value()) {
                echo "<script> alert('Wrong language selection');</script>";
                die();
              
            }else
            {
                if(empty($errors)==true) {
                    // echo shell_exec('pwd');
                    $path = "program/".$file_name;
                    move_uploaded_file($file_tmp,$path);
                    // echo "Success";
                    // echo '<br>';
                    // print_r($_FILES);
                } else {
                    print_r($errors);
                }
                return $path;
            }
            
        }
        else {
            echo 'Nothing here';
        }
    }
   
}

