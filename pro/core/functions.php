<?php
function checkRequestMethod ($method){
    if($_SERVER['REQUEST_METHOD']== $method ){
        return true ;
    }else{
        return false ;
    }

}
function recivebeInput($value){
    return trim(htmlentities(htmlspecialchars($value)));
}