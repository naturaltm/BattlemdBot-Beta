<?php



class workClass{    

     function userWork($nrHours){

             global $cUrlClass, $html;

             $postDataFormat = "hours={$nrHours}"; 
             $html->load($cUrlClass->goToPage('/work/', $postDataFormat));
             
             return true;        
     }

}

?>
