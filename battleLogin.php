<?php

class loginClass{
      private $userName = "nume"; 
      private $userPass = "parola";   

 
      function loginUser(){
      global $cUrlClass;
      
      $postDataFormat = "player={$this->userName}&pass={$this->userPass}";
      $resultLogin = $cUrlClass->goToPage('/tlogin.php',$postDataFormat);
      
      return $resultLogin;
      }

      function isLoged(){
      global $cUrlClass, $html;
      
      $html->load($cUrlClass->goToPage('/player/'));      
      $result = $html->find('div[id=rpage] font[size=3] b');
      
      if(!empty($result[0])){return true;}else{return false;}      
      }
}



?>
