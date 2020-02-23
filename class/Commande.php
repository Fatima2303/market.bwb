<?php

class Commande
{
    private $id;
    private $nomCommande;
    private $date;
    private $isDelivred;


    /*********CONSTRUCT*********/

    public function __construct(array $paramsCommande)
    {
        $this->hydrate($paramsCommande);
    }

    public function hydrate(array $paramsCommande)
    {
        foreach ($paramsCommande as $key => $value) {
            $setter = 'set' . ucfirst($key); {
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
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
     * return $nomCommande
     * type : string
     */

    public function getNomCommande()
    {
        return $this->nomCommande;
    }

    /**
     * return $date
     * type : date()
     */

    public function getDate()
    {
        return $this->date;
    }

    /**
     * return $isDelivred
     * type : boolean
     */

    public function getIsDelivred()
    {
        return $this->isDelivred;
    }

    /*********SETTERS*********/

    /**
     * set value $id
     * type : integer
     */

    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * set value $nomCommande
     * type : string
     */

    public function setNomCommande(string $nomCommande)
    {
        $this->nomCommande = $nomCommande;
    }

    /**
     * set value $date
     * type : date()
     */

    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * set value $isDelivred
     * type : boolean
     */

    public function setIsDelivred(bool $isDelivred)
    {
        $this->isDelivred = $isDelivred;
    }

    /*********SPECIFICS METHODS*********/
}
