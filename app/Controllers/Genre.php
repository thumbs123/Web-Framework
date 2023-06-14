<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;

class Genre extends BaseController
{
    //step2
    protected $genre;
    
    //step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this->genre = new GenreModel(); 
    }

    public function index()
    {
        $data['data_genre'] = $this->genre->getgenre();
        return view("genre/index",$data);
    }
    public function all(){
        $data['semuagenre'] = $this->genre->getAllData();
        return view("genre/semuagenre",$data);
    }
    public function genre(){
        dd($this->film->getDataBy("action"));
    }
    
}
