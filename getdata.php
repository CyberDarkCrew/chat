<?php 
    $filepath = "chatlog.txt";

    $content  = file_get_contents($filepath);
    
    if(filesize($filepath)!=0){
        $lines = explode("\n",$content);
        for($i=0; $i< count($lines); $i++){
            $text_get = explode("#",$lines[$i]);

            echo "<p style='padding-left:5px;padding-right:15px;'>

                <span style='color:rgb(48, 207, 0);font-weight:bold;width:100%;'>" . $text_get[0] . ":</span>
                <span style='color:#fff;width:100%;'>" . $text_get[1] . "</span>
                <span style='float:right;color:#ddd;'>" . $text_get[2] . "</span>

            </p>";
            ini_set('display_errors','Off');
        }

    }
?>