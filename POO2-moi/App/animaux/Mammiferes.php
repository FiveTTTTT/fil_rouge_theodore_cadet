<?php

class mammiferere{

    /**
     * Cri du mammiferere
     *
     * @var string
     */
    private $cri = "miaou";

    /**
     * Pelage du mammiferere
     *
     * @var string
     */
    private $pelage;

    /**
     * Nombre de pattes du mammiferere
     *
     * @var integer
     */
    private $pattes = 4;

    /**
     * Race du mammiferere
     *
     * @var string
     */
    private $race;

    /**
     * Nom du mammiferere
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
     * Get cri du mammiferere
     *
     * @return  string
     */ 
    public function getCri()
    {
        return $this->cri;
    }

    /**
     * Set cri du mammiferere
     *
     * @param  string  $cri  Cri du mammiferere
     *
     * @return  self
     */ 
    public function setCri(string $cri)
    {
        $this->cri = $cri;

        return $this;
    }

    /**
     * Get pelage du mammiferere
     *
     * @return  string
     */ 
    public function getPelage()
    {
        return $this->pelage;
    }

    /**
     * Set pelage du mammiferere
     *
     * @param  string  $pelage  Pelage du mammiferere
     *
     * @return  self
     */ 
    public function setPelage(string $pelage)
    {
        $this->pelage = $pelage;

        return $this;
    }

    /**
     * Get nombre de pattes du mammiferere
     *
     * @return  integer
     */ 
    public function getPattes()
    {
        return $this->pattes;
    }

    /**
     * Set nombre de pattes du mammiferere
     *
     * @param  integer  $pattes  Nombre de pattes du mammiferere
     *
     * @return  self
     */ 
    public function setPattes($pattes)
    {
        $this->pattes = $pattes;

        return $this;
    }

    /**
     * Get race du mammiferere
     *
     * @return  string
     */ 
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set race du mammiferere
     *
     * @param  string  $race  Race du mammiferere
     *
     * @return  self
     */ 
    public function setRace(string $race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get nom du mammiferere
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom du mammiferere
     *
     * @param  string  $nom  Nom du mammiferere
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }
}