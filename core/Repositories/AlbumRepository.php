<?php


namespace Core\Repositories;

use App\Models\Album;
use Core\Entity\AlbumEntity;
use Core\Interfaces\AlbumReboInterface;

class AlbumRepository implements AlbumReboInterface {

   public function getAll()
   {
        $albums = Album::select('id' , 'name')->get();

        return $albums;
   }


   public function findAlbum($AlbumId)
   {
       return  Album::findOrFail($AlbumId);
   }


   public function create($data)
   {

        return Album::create($data);
   }


   public function update($id)
   {
      
   }


   public function delete($AlbumId)
   {
    
   }

}