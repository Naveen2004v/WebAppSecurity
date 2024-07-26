<?php

class Code 
{
    public static function dropdown_value()
    {
        if(isset($_POST['lang-selection']))
        {          
                $selectedOption = $_POST['lang-selection'];
                // echo "You selected: " . $selectedOption;   
                return $selectedOption;
        }
        else
        {
            echo 'Something went wrong';
        }
    
    }

    public static function code_content()
    {
        if(isset($_POST['code-area']))
        {
            $text = $_POST['code-area'];
            $sanitized_input = strip_tags($text);
            $code_input = htmlentities($sanitized_input);
            // echo $code_input;
            return $code_input;
        }
        else
        {
            echo 'Something went wrong!';
        }
    }

    public static function code_name()
    {
        $file_name = "program.".Code::dropdown_value();
        return $file_name;
    }


    public static function code_write()
    {
        $file_name = $_SERVER['DOCUMENT_ROOT'] ."/websha/program/".Code::code_name();
        $code_content = htmlspecialchars_decode(Code::code_content());
        $code_file = fopen($file_name,'w');
        fwrite($code_file,$code_content);
        fclose($code_file);
        return $file_name;
    }

    
    public static function php_code_write()
    {
        $file_name = $_SERVER['DOCUMENT_ROOT'] ."/websha/program/".Code::code_name();
        $code_content = '<?php';
        $code_content .= htmlspecialchars_decode(Code::code_content());
        $code_content .= '?>';
        $code_file = fopen($file_name,'w');
        fwrite($code_file,$code_content);
        fclose($code_file);
        return $file_name;
    }

    public static function file_name()
    {
        if (Code::dropdown_value() == 'c' || Code::dropdown_value() == 'cpp' || Code::dropdown_value() == 'py') 
       {
        $filename =  escapeshellarg(Code::code_write()); 
       }

       if(Code::dropdown_value() == 'php')
       {
            $filename = basename(Code::php_code_write());
       }


        return $filename;
    }

}