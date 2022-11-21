<?php

namespace Core\Entities;



class AlbumEntity{
 
    private $attributes;


    public function __construct($attributes){
         
        $this->attributes = $attributes;
    }


    public function getName(){
       
        return $this->attributes['name'];

    }

    public function getAttributes(){

        return $this->attributes;
    }
    
        
    

}