<?php

class mineClass{

	function workMine(){
        global $cUrlClass, $html;
        

        $cUrlClass->goToPage('/mine/start/');
        $html->load($cUrlClass->goToPage("/mine/"));
        
             
        return true;
    }




}

?>