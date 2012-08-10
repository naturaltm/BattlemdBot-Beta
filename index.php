<?php
//Battle.net Bot (Beta)
//Author Naturaltm (naturaltm@gmail.com)



include("curl.php");
include('simple_html_dom.php');
include("battleAtack.php");
include("battleLogin.php");
include("battleWork.php");
include("battleMine.php");

$loginClass = new loginClass();
$atackClass = new atackClass();
$workClass  = new workClass();
$mineClass  = new mineClass();
$cUrlClass  = new cUrl();
$html       = new simple_html_dom();

if(($loginClass->isLoged())==true){

$workClass->userWork("2"); //lucreaza, in paranteze indicam numarul de ore
$atackClass->generalAtack("1"); //ataca, in paranteze indicam puterea adversarului, 1-slab, 2-mediu, 3-puternic
$mineClass->workMine();  //lucreaza in mina

}else{
     $loginClass->loginUser();
}




?>
