<?php
function requiredInput($value){
    $str = trim(htmlspecialchars_decode($value));
    if(strlen($str)>0){
        return true ;
    }else{
        return false ;
    }
}
function santstring($value){
    $str = trim($value);
    $str = filter_var($str ,FILTER_SANITIZE_STRING);
    return $str ;
}
function santemail($email){
    $str = trim($email);
    $str = filter_var($str ,FILTER_SANITIZE_EMAIL);
    return $str ;
}
// error 
$error = "";
// 
$success = "";


function minInput($value,$min)
{
    if(strlen($value) < $min)
    {
        return false;
    }
    return true;
}


function maxInput($value,$max)
{
    if(strlen($value) > $max)
    {
        return false;
    }
    return true;
}



function validEmail($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    return false;
}


