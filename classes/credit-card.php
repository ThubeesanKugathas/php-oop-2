<?php 

class CreditCard {

    protected string $cardNumber;
    protected string $expiringDate;
    protected int $codeCCV;


    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {   
        if (strlen($cardNumber) == 19) {

            $this->cardNumber = $cardNumber;
            
            return $this;
        } 

        $this->cardNumber = "CARTA NON ESISTENTE";

        return $this;

    }

    /**
     * Get the value of expiringDate
     */ 
    public function getExpiringDate()
    {
        return $this->expiringDate;
    }

    /**
     * Set the value of expiringDate
     *
     * @return  self
     */ 
    public function setExpiringDate($expiringDate)
    {
        $today = date('Y-m-d');
        $expire = date_create($expiringDate);

        if(date_format($expire, "Y-m-d") < $today) {

            $this->expiringDate = "CARTA NON VALIDA - SCADUTA";

            return $this; 
        }

        $this->expiringDate = $expiringDate;

        return $this;
    }

    /**
     * Get the value of codeCCV
     */ 
    public function getCodeCCV()
    {
        return $this->codeCCV;
    }

    /**
     * Set the value of codeCCV
     *
     * @return  self
     */ 
    public function setCodeCCV($codeCCV)
    {   
        if (is_int($codeCCV) && strlen($codeCCV) == 3) {

            $this->codeCCV = $codeCCV;

            return $this;
        }
    }
}

?>