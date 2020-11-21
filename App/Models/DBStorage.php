<?php

namespace App\Models;

use PDO;

class DBStorage
{

    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=projekt", "root", "dtb456");
    }

    public function LoadAllMovies()
    {
        $result = [];

        $r = $this->pdo->query("SELECT * FROM movies");

        foreach ($r as $item) {
            $result[] = new Movie($item['nazov'],$item['popis'],$item['zaner']);
        }

        return $result;
    }

    public function SaveMovie(Movie $movie)
    {
       $statement = $this->pdo->prepare("INSERT INTO movies (naozv, popis, zaner, img) value (?,?,?,?)");
        $statement->execute([$movie->getTitle(), $movie->getText()]);
    }

    public function LoadAllShows()
    {
        $result = [];

        $r = $this->pdo->query("SELECT * FROM shows");

        foreach ($r as $item) {
            $result[] = new Movie($item['nazov'],$item['popis'],$item['zaner']);
        }

        return $result;
    }

    public function SaveShow(Show $show)
    {
        $statement = $this->pdo->prepare("INSERT INTO shows (naozv, popis, zaner, img) value (?,?,?,?)");
        $statement->execute([$show->getTitle(), $show->getText()]);
    }
}