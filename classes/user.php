<?php 

require_once __DIR__ . "/credit-card.php";

class User extends CreditCard {

    protected string $name;
    protected string $surname;
    protected string $email;
    protected bool $registered;
    protected bool $discount;

    function __construct(array $userDetails) {
        $this->setName($userDetails["userName"]);
        $this->setSurname($userDetails["userSurname"]);
        $this->setEmail($userDetails["userEmail"]);
        $this->setRegistered($userDetails["userRegistered"]);
        $this->setDiscount($userDetails["userRegistered"]);
        $this->setCardNumber($userDetails["userCardNumber"]);
        $this->setExpiringDate($userDetails["userCardExpire"]);
        $this->setCodeCCV($userDetails["userCardCVV"]);

    }

    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {   
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($registered)
    {
        if($registered) {
            
            $this->discount = true;
        } 

        return false;

    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

?>