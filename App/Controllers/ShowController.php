<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Show;

class ShowController extends AControllerBase
{

    public function index()
    {
    }

    public function komedia()
    {
        $result = [];
        foreach (Show::getAll() as $show)
        {
            if ($show->getZaner() == "komedia")
            {
                $result[] = $show;
            }
        }
        return $result;
    }

    public function fantasy()
    {
        $result = [];
        foreach (Show::getAll() as $show)
        {
            if ($show->getZaner() == "fantasy")
            {
                $result[] = $show;
            }
        }
        return $result;
    }

    public function drama()
    {
        $result = [];
        foreach (Show::getAll() as $show)
        {
            if ($show->getZaner() == "drama")
            {
                $result[] = $show;
            }
        }
        return $result;
    }

    public function add(){

    }

    public function edit(){

    }

    public function delete(){

    }
}