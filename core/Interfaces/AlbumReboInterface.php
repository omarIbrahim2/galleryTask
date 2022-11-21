<?php


namespace Core\Interfaces;

use Core\Entity\AlbumEntity;

interface AlbumReboInterface{


    public function getAll();



    public function findAlbum($AlbumId);


    public function create($data);

    public function update($id);


    public function delete($AlbumId);


}