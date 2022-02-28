<?php 
require_once __DIR__ . "/products.php";

class Toys extends Products {
    
    protected string $gameType;
    protected string $material;

    function __construct(array $toysDetails) {
        $this->setTitle($toysDetails["productName"]);
        $this->setPrice($toysDetails["productPrice"]);
        $this->setDescription($toysDetails["productDescription"]);
        $this->setQuantity($toysDetails["productQuantity"]);
        $this->setGameType($toysDetails["gameType"]);
        $this->setMaterial($toysDetails["gameMaterial"]);
    }

    /**
     * Get the value of gameType
     */ 
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     *
     * @return  self
     */ 
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}

?>