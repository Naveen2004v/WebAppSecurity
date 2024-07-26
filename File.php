<?php

if(isset($_FILES['file'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext= pathinfo($file_name, PATHINFO_EXTENSION);
    echo $file_name;
  
    $myfile = fopen($file_name, "r") or die("Unable to open file!");
    echo fread($myfile,filesize($file_name));
    //$my1file = fopen("new.txt", "w") or die("Unable to open file!");
    //fwrite($my1file,$myfile);

    fclose($myfile);
    //fclose($my1file);

    $efile= 'flawfinder '.$file_name;
    echo shell_exec('pwd');
    $out = shell_exec($efile);
    
    echo "<pre>$out</pre>";
    

            
}        
        
            
    
?>