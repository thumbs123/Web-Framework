<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
	protected $primaryKey = 'id';
    protected $UseAutoIncrement = true;
    protected $allowedFields = ['nama_film','id_genre','duration','cover'];

    public function getFilm()
    {
        $data=[
            [
                "nama_film" => "Sewu Dino",
                "genre" => "Horor",
                "duration" => "1 jam 43 menit"
            ],
            [
                "nama_film" => "Fast X",
                "genre" => "Action",
                "duration" => "2 jam 9 menit"
            ],
            [
                "nama_film" => "Mario Bros",
                "genre" => "Kartun",
                "duration" => "1 jam 50 menit"
            ],
            [
                "nama_film" => "Doraemon Stand by Me",
                "genre" => "Kartun",
                "duration" => "1 jam 43 menit"
            ],
            [
                "nama_film" => "The Insidious",
                "genre" => "horor",
                "duration" => "1 jam 30 menit"   
            ]
        ];
        return $data;
    }
    public function getAllData(){
        return $this->findAll();
    }
    public function getAllDataJoin(){
        $query = $this->db->table("film")
        ->select("film.*, genre.nama_genre")
        ->join("genre", "genre.id = film.id_genre");
        return $query->get()->getResultArray();
    }
    public function genre($data){
        return $this->where("genre",$data)->findAll;
    }
}