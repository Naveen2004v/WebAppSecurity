<?php

require_once('/var/www/html/websha/load.php');

Load::LoadClass();

class Result
{
    public static function display_result($output)
    {
        $text = 'The Final Analysis Summary : 
        
        
        
        ';
        echo '<textarea style="resize:none; height:500px; width:1500px; text-align:center; margin-left:250px; font-size:17px; padding-top:50px;" readonly> '.$text.$output.' </textarea>';
    }
}