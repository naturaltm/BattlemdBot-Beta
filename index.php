<?php
//Battle.net Bot (Beta)
//Author Naturaltm (naturaltm@gmail.com)



include("curl.php");
include("battleAtack.php");
include("battleLogin.php");
include("battleWork.php");
include("battleMine.php");

$loginClass = new loginClass();
$atackClass = new atackClass();
$workClass  = new workClass();
$mineClass  = new mineClass();

if(($loginClass->isLoged())==true){

$workClass->userWork("2"); //lucreaza
$atackClass->generalAtack("1"); //ataca utilizatori 
$mineClass->workMine();  //lucreaza in mina

}else{
     $loginClass->loginUser();
}




?>
