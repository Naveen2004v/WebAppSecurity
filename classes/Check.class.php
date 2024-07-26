<?php

require_once('src/templates/head.php');
require_once('src/templates/header_title.php');
// require_once('src/templates/input_bar.php');
require_once('/var/www/html/websha/load.php');

Load::LoadClass();
class Check
{
    public static function Flawfinder($filename)
    {
        // TODO : Modify the command for specific output and try to hide the file path in the output
        // TODO : Also modify the function which will easier for both code section and file section 
        if (Code::dropdown_value() == 'c' || Code::dropdown_value() == 'cpp')
        {
            // echo shell_exec('pwd');
            $cmd = 'flawfinder --quiet --context --dataonly '.$filename ;
            // echo $cmd;
            $output = shell_exec($cmd);
            
            // echo '<pre>'.$output.'</pre>';
            shell_exec('rm '.$filename);
            return $output;
            
        }
    }

    
}