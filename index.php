<!DOCTYPE html>
<?php
require_once('/var/www/html/websha/load.php');
?>
<html>
    <head>
        <title>Testing</title>
        <link rel="stylesheet" href="style.css">
        <script src='script.js'></script>
    </head>
    <body>
        <div class="header">
            <h1 class="title">Webshaz</h1>
        </div>
        <div class="container">
            <div class="description">
                <p class="desc-text">
                    Scan the Program files and a piece of code using this<br>
                    Automated vulnerability scanner and download the analysis report.<br>
                    <span class="quote-desc-txt">
                        <br>
                        
                        “Service the world by creating secured websites”
                     </span>
                </p>
            </div>



            <!--Tab Area-->
            <div class="tab">
                <button class="tablinks" onclick="opentab(event, 'Code')" id='defaultOpen'>CODE <i class="fa-solid fa-code" style="margin-left: 5px
                ;" ></i></button>
                <button class="tablinks" onclick="opentab(event, 'File')">FILE <i class="fa-solid fa-file-code" style="margin-left: 5px
                ;"></i></button>
                
            </div>



            <!--Code Area-->
            <div id="Code" class="tabcontent">
                <div class="language-selection">
                  <form action="Check.php" method="post" style="width: 500px;">
                    <label for="dropdown"class="lang">Select the Language</label>
                    <select id="dropdown" name="lang-selection">
                        <option value="c">C <img src="Icons/c.png" class="lang-icon"></option>
                        <option value="cpp">C++ <img src="Icons/c++.png" class="lang-icon"></option>
                        <option value="py">Python <img src="Icons/python.jpeg" class="lang-icon"></option>
                        <option value="php">PHP <img src="Icons/php.png" class="lang-icon"></option>
                      </select>
                    </div>
                    
                    <div class="textbox">
                      <textarea  name="code-area"style="height: 200px; width: 100%; resize: none; padding: 10px;" placeholder="Paste your code here ..."></textarea>
                    </div>
                    <!-- <div class="btn"> -->
                    <button class="analyze-btn">Analyze</button>
                    </form>
                </div>




                <!--File Area-->
                <div id="File" class="tabcontent">
                    <div class="language-selection">
                      
                      <form action="File.php" method="post" enctype="multipart/form-data">
                    <label for="dropdown"class="lang">Select the Language</label>
                    <select id="dropdown" name="lang-selection">
                        <option value="c">C <img src="Icons/c.png" class="lang-icon"></option>
                        <option value="cpp">C++ <img src="Icons/c++.png" class="lang-icon"></option>
                        <option value="py">Python <img src="Icons/python.jpeg" class="lang-icon"></option>
                        <option value="php">PHP <img src="Icons/php.png" class="lang-icon"></option>
                      </select>
                  </div>
                  <div class="upload-box">
                    <div class="upload-drop-zone" id="drop-zone">
                      <span class="drop-zone-text">Drag and drop files here or click to upload</span>
                      <input name="file" type="file" class="upload-input" id="upload-input" multiple>
                    </div>
                    <div class="upload-file-name" id="file-name"></div>
                  </div>
                    <button type="submit" class="upload-btn" id="upload-btn">Upload</button>
                </form>
                </div> 


                
        </div>
    </body>

<script>
    document.getElementById("defaultOpen").click();
    </script>
</html>
