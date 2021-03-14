<?php
namespace App\Animaux;

abstract class Mammifere{

     /**
     * Cri du mammifere
     *
     * @var string
     */
    protected $cri;

    /**
     * Pelage du mammifere
     *
     * @var string
     */
    protected static $pelage;

    /**
     * Nombre de pattes du mammifere
     *
     * @var integer
     */
    protected $pattes = 4;

    /**
     * Race du mammifere
     *
     * @var string
     */
    protected $race;

    /**
     * Nom du mammifere
     *
     * @var string
     */
    protected $nom;

    public function __construct($nom, $race, $pelage)
    {
        $this->nom = $nom;
        $this->race = $race;
        self::$pelage = $pelage;
    }
    

    /**
     * Get cri du mammifere
     *
     * @return  string
     */ 
    abstract public function getCri();

    /**
     * Set cri du mammifere
     *
     * @param  string  $cri  Cri du mammifere
     *
     * @return  self
     */ 
    public function setCri(string $cri)
    {
        $this->cri = $cri;

        return $this;
    }

    /**
     * Get pelage du mammifere
     *
     * @return  string
     */ 
    public static function getPelage()
    {
        return self::$pelage;
    }

    /**
     * Set pelage du mammifere
     *
     * @param  string  $pelage  Pelage du mammifere
     *
     * @return  self
     */ 
    public static function setPelage(string $pelage)
    {
        self::$pelage = $pelage;

    }

    /**
     * Get nombre de pattes du mammifere
     *
     * @return  integer
     */ 
    public function getPattes()
    {
        return $this->pattes;
    }

    /**
     * Set nombre de pattes du mammifere
     *
     * @param  integer  $pattes  Nombre de pattes du mammifere
     *
     * @return  self
     */ 
    public function setPattes($pattes)
    {
        $this->pattes = $pattes;

        return $this;
    }

    /**
     * Get race du mammifere
     *
     * @return  string
     */ 
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set race du mammifere
     *
     * @param  string  $race  Race du mammifere
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get nom du mammifere
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom du mammifere
     *
     * @param  string  $nom  Nom du mammifere
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }
}