<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//step1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step2
    protected $film;
    
    //step 3 buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel(); 
    }

    public function index()
    {
        $data['data_film'] = $this->film->getfilm();
        return view("film/index",$data);
    }
    public function all(){
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm",$data);
    }
    public function genre(){
        dd($this->film->getDataBy("action"));
    }
    
}