<?php


namespace App\Models;


use App\Core\Model;

class Movie extends Model
{
    protected $id;
    protected $nazov;
    protected $popis;
    protected $zaner;
    protected $img;


    public function __construct($nazov = "", $popis = "", $zaner = "", $img = "")
    {
        $this->nazov = $nazov;
        $this->popis = $popis;
        $this->zaner = $zaner;
        $this->img = $img;
    }

    static public function setDbColumns()
    {
        return ["id", "nazov", "popis", "img", "zaner"];
    }

    static public function setTableName()
    {
        return "movies";
    }

    public function setAll($nazov = "", $popis = "", $zaner = "", $img = "")
    {
        $this->nazov = $nazov;
        $this->popis = $popis;
        $this->zaner = $zaner;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }

    /**
     * @return mixed
     */
    public function getPopis()
    {
        return $this->popis;
    }

    /**
     * @param mixed $popis
     */
    public function setPopis($popis): void
    {
        $this->popis = $popis;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getZaner()
    {
        return $this->zaner;
    }

    /**
     * @param mixed $zaner
     */
    public function setZaner($zaner): void
    {
        $this->zaner = $zaner;
    }
}