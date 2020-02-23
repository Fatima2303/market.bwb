<?php

class Client
{
    private $id;
    private $nom;
    private $numeroClient;
    private $adresse;
    private $telephone;
    private $mail;


    /*********CONSTRUCT*********/

    public function __construct(array $paramsClient)
    {
        $this->hydrate($paramsClient);
    }

    public function hydrate(array $paramsClient)
    {
        foreach ($paramsClient as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }
    /*********GETTERS*********/

    /**
     * return $id
     * type : integer
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * return $nom
     * type : string
     */

    public function getNom()
    {
        return $this->nom;
    }

    /**
     * return $numeroClient
     * type :integer
     */

    public function getNumeroClient()
    {
        return $this->numeroClient;
    }

    /**
     * return $adresse
     * type : string
     */

    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * return $telephone
     * type: integer
     */

    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * return $mail
     * type : string
     */

    public function getMail()
    {
        return $this->mail;
    }

    /*********SETTERS*********/

    /**
     * set value $id
     * type : integer
     */

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * set value $nom
     * type : string
     */

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * set value $numeroClient
     * type : integer
     */
    public function setNumeroClient($numeroClient)
    {
        $this->numeroClient = $numeroClient;
    }

    /**
     * set value $adresse
     * type : string
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * set value $telephone
     * type : integer
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * set value $mail
     * type : string
     */

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    /*********SPECIFICS METHODS*********/
}
