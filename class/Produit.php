<?php

class Produit
{
    private $id;
    private $nomProduit;
    private $descriptionProduit;
    private $quantityProduit;
    private $isAvailable;
    private $prix;

    /*********CONSTRUCT*********/
    public function __construct(array $paramsProduit)
    {
        $this->hydrate($paramsProduit);
    }

    public function hydrate(array $paramsProduit)
    {
        foreach ($paramsProduit as $key => $value) {
            $setter = 'set' . ucfirst($key); {
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

    /*********GETTERS*********/
    /*
    *return $id
    *type : integer
    */

    public function getId()
    {
        return $this->id;
    }

    /*
    *return $nomProduit
    * type string
    */

    public function getNomProduit()
    {
        return $this->nomProduit;
    }

    /*
    *return $descriptionProduit
    *type string
    */

    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /*
    * return $quantityProduit
    * type integer
    */
    public function getQuantityProduit()
    {
        return $this->quantityProduit;
    }
    /*
    * return $isAvailable
    * type boolean
    */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }
    /*
    *return $prix
    *type float
    */
    public function getPrix()
    {
        return $this->prix;
    }

    /*********SETTERS*********/

    /*
    * set value $id
    * type : int
    */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    /*
    *set value $nomProduit
    * type : string
    */
    public function setNomProduit(string $nomProduit)
    {
        $this->nomProduit = $nomProduit;
    }
    /*
    *set value $descriptionProduit
    *type : string
    */
    public function setDescriptionProduit(string $descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;
    }

    /*
    * set value $quantityProduit 
    * type : integer
    */
    public function setQuantityProduit(int $quantityProduit)
    {
        $this->quantityProduit = $quantityProduit;
    }

    /*
    *set value $isAvailable
    * type : float
    */
    public function setIsAvailable(float $isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }
    /*
    *set value $prix
    * type : float
    */
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }
}
