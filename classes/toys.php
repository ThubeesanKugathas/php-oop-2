<?php 
require_once __DIR__ . "/products.php";

class Toys extends Products {
    
    protected string $gameType;
    protected string $material;
    protected int $quantity;



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