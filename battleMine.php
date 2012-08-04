<?php

class mineClass{

	    function workMine(){
        global $cUrlClass, $html;
        

        $cUrlClass->goToPage('/mine/start/');
        $html->load($cUrlClass->goToPage("/mine/"));
        
        $findTime = $html->find('script');             
        $blabla = preg_replace("/[^0-9]/", "", $findTime[5]);
             
        return $blabla;
    }




}

?>