<?php

require_once('/var/www/html/websha/load.php');

Load::LoadClass();

class Tool
{
    public static function Check_Code()
    {
        if(Code::dropdown_value() == 'c' || Code::dropdown_value() == 'cpp')
        {
            return Check::Flawfinder(Code::file_name());
        }

        
    }

    public static function Check_File()
    {
        if(Code::dropdown_value() == 'c' || Code::dropdown_value() == 'cpp')
        {
            return Check::Flawfinder(File::upload_file());
        }

        
        
    }
}