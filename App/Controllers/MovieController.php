<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Movie;

class MovieController extends  AControllerBase
{

    public function index()
    {

    }

    public function akcny()
    {
        $result = [];
        foreach (Movie::getAll() as $movie)
        {
            if ($movie->getZaner() == "akcny")
            {
                $result[] = $movie;
            }
        }
        return $result;
    }

    public function scifi()
    {
        $result = [];
        foreach (Movie::getAll() as $movie)
        {
            if ($movie->getZaner() == "scifi")
            {
                $result[] = $movie;
            }
        }
        return $result;
    }

    public function horror()
    {
        $result = [];
        foreach (Movie::getAll() as $movie)
        {
            if ($movie->getZaner() == "horror")
            {
                $result[] = $movie;
            }
        }
        return $result;
    }

    public function add()
    {
        if (!isset($_POST["nazov"]))
        {
            return null;
        }

        $movie = new Movie($_POST["nazov"], $_POST["popis"], $_POST["zaner"], $_POST["img"]);

        if ($_POST["img"] == "")
        {
            $movie->setImg("https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/600px-No_image_available.svg.png");
        }

        $validationOutput = $this->validate($_POST["nazov"], $_POST["img"]);

        if ($validationOutput == null)
        {
            $movie->save();
            $this->potvrdenie($movie, "add");
        }

        return ["instance" => $movie, "errors" => $validationOutput];

    }

    public function edit()
    {
        if (isset($_POST["id"]))
        {
            $movie = Movie::getOne($_GET["id"]);
            $movie->setAll($_POST["nazov"], $_POST["popis"], $_POST["zaner"], $_POST["img"]);

            $validationOutput = $this->validate($_POST["nazov"], $_POST["img"]);

            if ($validationOutput == null)
            {
                $movie->save();
                $this->potvrdenie($movie, "edit");
            }
        }
        else
        {
            $movie = Movie::getOne($_GET["id"]);
            $validationOutput = $this->validate($movie->getNazov(), $movie->getImg());
        }

        return ["instance" => $movie, "errors" => $validationOutput];
    }

    public function delete()
    {
        if (isset($_GET["id"]))
        {
            $movie = Movie::getOne($_GET["id"]);
            $movie->delete();
        }
        $this->potvrdenie($movie, "delete");
    }

    private function potvrdenie(Movie $movie, $zmena)
    {
        header("Location: http://localhost/projektVAII?c=Home&a=zmena&typ=" . $zmena . "&nazov=" . $movie->getNazov());
        die();
    }

    public function validate($nazov, $img)
    {
        $errNazov = [];
        $errImg = [];

        //nazov
       if (strlen($nazov)<2)
       {
           $errNazov[] = "Názov musí mať aspoň dva znaky.";
       }
       if (ord($nazov) < 65 || ord($nazov) > 90)
       {    //ascii A=65, Z=90
           $errNazov[] = "Názov musí začínať veľkým písmenom.";
       }

       //obrazok
       if  ($img != "")
       {
           if (substr($img, 0, 4) != "http")
           {
               $errImg[] = "Vloz platnu url adresu";
           }
       }

       //kontrola validacie
       if (count($errNazov) != 0 || count($errImg) != 0)
       {
           return ["nazov" => $errNazov, "img" => $errImg];
       }
       return null;

    }
}