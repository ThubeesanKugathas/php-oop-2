<?php 
require_once __DIR__ . "/products.php";

class DogBed extends Products {

    protected string $size;
    protected string $color;
    protected string $bedMaterial;

    function __construct(array $bedDetails) {
        $this->setTitle($bedDetails["productName"]);
        $this->setPrice($bedDetails["productPrice"]);
        $this->setDescription($bedDetails["productDescription"]);
        $this->setQuantity($bedDetails["productQuantity"]);
        $this->setSize($bedDetails["bedSize"]);
        $this->setColor($bedDetails["bedColor"]);
        $this->setBedMaterial($bedDetails["bedMaterial"]);
        
    }


    

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of bedMaterial
     */ 
    public function getBedMaterial()
    {
        return $this->bedMaterial;
    }

    /**
     * Set the value of bedMaterial
     *
     * @return  self
     */ 
    public function setBedMaterial($bedMaterial)
    {
        $this->bedMaterial = $bedMaterial;

        return $this;
    }
}


?>