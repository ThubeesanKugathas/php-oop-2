<?php 
require_once __DIR__ . "/products.php";

class Food extends Products {

    protected string $type;
    protected string $brand;
    protected int $weight;

    function __construct(array $foodProductDetails) {
        $this->setTitle($foodProductDetails["productName"]);
        $this->setPrice($foodProductDetails["productPrice"]);
        $this->setDescription($foodProductDetails["productDescription"]);
        $this->setQuantity($foodProductDetails["productQuantity"]);
        $this->setType($foodProductDetails["foodType"]);
        $this->setBrand($foodProductDetails["foodBrand"]);
        $this->setWeight($foodProductDetails["foodWeight"]);
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }


    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {   
        if (is_int($weight)) {
            $this->weight = $weight;
    
            return $this;
        }
    }
}


?>