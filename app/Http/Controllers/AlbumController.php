<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumCreateRrquest;
use Core\Entities\AlbumEntity;
use Core\Gallery\Gallery;
use Core\Interfaces\AlbumReboInterface;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    private $Gallery;
    public function __construct(Gallery $Gallery)
    {
        $this->Gallery = $Gallery;
    }

    public function create(AlbumCreateRrquest $request){
       

        $albumEntity = new AlbumEntity($request->all());

          $message = "";

        
        if ($this->Gallery->AddAlbum($albumEntity)) {
            
            $message = 'album created successfully';
        }else{

            $message = "Error in creating Album ..!";
        }

        return  response()->json([
            'message' => $message
        ]);
        

    }
}
