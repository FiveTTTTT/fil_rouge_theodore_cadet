<?php
namespace App\Animaux;

class Mammifere{

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
    private $pelage;

    /**
     * Nombre de pattes du mammifere
     *
     * @var integer
     */
    private $pattes = 4;

    /**
     * Race du mammifere
     *
     * @var string
     */
    private $race;

    /**
     * Nom du mammifere
     *
     * @var string
     */
    private $nom;

    public function __construct($nom, $race, $pelage)
    {
        $this->nom = $nom;
        $this->race = $race;
        $this->pelage = $pelage;
    }
    

    /**
     * Get cri du mammifere
     *
     * @return  string
     */ 
    public function getCri()
    {
        return $this->cri;
    }

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
    public function getPelage()
    {
        return $this->pelage;
    }

    /**
     * Set pelage du mammifere
     *
     * @param  string  $pelage  Pelage du mammifere
     *
     * @return  self
     */ 
    public function setPelage(string $pelage)
    {
        $this->pelage = $pelage;

        return $this;
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