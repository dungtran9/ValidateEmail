<?php
function validateEmail($str)
{
    $regexp= '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo("Email hop le");
    } else {
        echo("Email khong hop le");
    }
}
validateEmail("ab@gmail.");

