<?php 

	class App
	{
        public static function createView($viewName){
            require_once 'resources/views/'.$viewName.'.php';
        }

        public static function createPartial($partialName,$tree){
            include 'resources/partials/'.$tree.'/'.$partialName.'.php';
        }

    }

?>