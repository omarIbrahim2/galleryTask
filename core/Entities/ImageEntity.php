<?php

namespace Core\Entity;



class ImageEntity{
 
    private $attributes;


    public function __construct($attributes){
         
        $this->attributes = $attributes;
    }


    public function getName(){
       
        return $this->attributes['name'];

    }


    public function getSrcImage(){
         return $this->attributes['image'];
    }
    
        
    

}