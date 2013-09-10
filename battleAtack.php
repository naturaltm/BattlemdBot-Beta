<?php
class atackClass{

         function atackUser($userType){
            global $cUrlClass, $html;

            $postDataFormat = "type={$userType}";
            $html->load($cUrlClass->goToPage('/alley/',$postDataFormat));
            $result = $html->find('div[style=padding-top:130px;]',0)->children(1);
            $extractNumber = intval(preg_replace("/[^0-9]/", "", $result));
            $idUserAtack = substr($extractNumber, 7);
            $result = $cUrlClass->goToPage("/attack/{$idUserAtack}/");

            return $result; 

         }


         function timeRest(){
             global $cUrlClass, $html;

             $html->load($cUrlClass->goToPage("/alley/"));
             $findTime = $html->find('script');             
             $tmpTime = intval(preg_replace("/[^0-9]/", "", $findTime[5]));
             
             if(strlen($tmpTime)>4)
                     return $tmpTime = 0;
             else
                     return $tmpTime;
             
                                 
          }


        function buyLife(){
         global $cUrlClass, $html;
 
         $text = "Viata se restabileste in fiecare 2 minute cu 30%. Insa esti si posibilitatea sa restabilesti viata momentan pe o plata adaugatoare.";
         $html->load($cUrlClass->goToPage("/player/"));
         $findLife = $html->find("font[size=2] b[title={$text}]",0)->plaintext;
         $explodeLife = explode("/",$findLife);
         $minimalLife = (int)(($explodeLife[1]*15)/100);
         
         if($minimalLife < $explodeLife[0]){
              $cUrlClass->goToPage("/player/?health=1");
              return true;
         }else{
              return false; 
         }         
        }

        function generalAtack($uType2){
             global $cUrlClass, $html;

             $totalTime = $this->timeRest() + time();  
              
             if($totalTime <= time()){
                 $this->atackUser($uType2);
                 $this->buyLife();
             }else{
                 echo "Odihnestete";
             }
        }

      
}




?>
