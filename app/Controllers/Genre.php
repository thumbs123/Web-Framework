<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //step 2
    protected $genre;                                                                                        
    //step 3 fungsi constract
    public function __construct()
    {
        //step 4
        $this->genre = new GenreModel();
    }
    public function index()
    {
        //step 5
        $data['semuagenre'] = $this->genre->getGenre();
        return view("genre/index", $data);
    }
    public function all()
    {
        $data['semuagenre'] = $this->genre->getAllData();
        return view("film/genre", $data);
    }
    public function genre()
    {
        dd($this->film->getDataBy("action"));
    }
}