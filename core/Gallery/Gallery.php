<?php

namespace Core\Gallery;


use Core\Entities\AlbumEntity;
use Core\Interfaces\AlbumReboInterface;

class Gallery{

  private $albumRepoInterface;


  public function __construct(AlbumReboInterface $albumRepoInterface)
  {
     $this->albumRepoInterface = $albumRepoInterface;
  }

  public function AddAlbum(AlbumEntity $album){
      
        $album = $this->albumRepoInterface->create($album->getAttributes());
        
        if($album){
            return true;
        }

        return false;
  }


}