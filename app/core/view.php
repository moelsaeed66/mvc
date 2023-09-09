<?php

class view{
    public static function load($path,$data=[]){
        extract($data);
        require(VIEWS.$path.".php");
    }
}