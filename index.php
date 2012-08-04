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

//$workClass->userWork("2"); Lucreaza 
//$atackClass->generalAtack("1"); //Ataca
//$mineClass->workMine();  //Se duce in mina

}else{
     $loginClass->loginUser();
}




?>
