<?php
// if($_SERVER["HTTP_HOST"] != "palette.art"){
//             $json = '{"status":false, "msg":"وش تدور هنا؟"}';
//             echo $json;
//             exit;
// }      
$isAjax = isset($_SERVER["HTTP_X_REQUESTED_WITH"]);
if(!$isAjax)
{
            $json = 'Access Denied';
            echo $json;
            exit; die();
            
}
    if(isset($_POST['fun'])  && isset($_POST['theme']) && $_POST['fun'] == "change_theme" ||  $_POST['theme'] != ""){ 
    setcookie("theme", $_POST['theme'], time() + (86400 * 30), "/", NULL, 0 );  // 86400 = 1 day
    echo 'done';
    exit();
    }

?>
         
