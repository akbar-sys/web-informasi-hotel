<?php

function truncateString($str, $chars, $to_space, $replacement="...") {
    if($chars > strlen($str)) return $str;

    $str = substr($str, 0, $chars);
    $space_pos = strrpos($str, " ");
    if($to_space && $space_pos >= 0) 
        $str = substr($str, 0, strrpos($str, " "));

    return($str . $replacement);
}

?>