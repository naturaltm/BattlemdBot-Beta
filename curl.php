<?php
include('simple_html_dom.php');

class cUrl{

      private $main_url = 'http://www.battlemd.net';
      private $browser = 'Mozila';
      public $cookiesFile = '/var/www/battleBot/cookies.txt';
      

      public function goToPage($url, $postData = null){

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $this->main_url.$url);
      curl_setopt($ch, CURLOPT_USERAGENT, $this->browser);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_COOKIEJAR, $this->cookiesFile);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $this->cookiesFile);

       if(isset($postData)){
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);         
         }
      $result = curl_exec($ch);
      curl_close($ch);
      return $result;
      }


}

$cUrlClass = new cUrl();
$html = new simple_html_dom();


?>
