<?php
define('MODULE_PATH','modules/');
date_default_timezone_set("Asia/Jakarta");
function sanitize($input) {
    $input = trim(htmlentities(strip_tags($input,",")));
    $val = stripslashes($input);
    
    return $val;
}
?>