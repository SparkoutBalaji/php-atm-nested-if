<?php 
class ATM
{
    private $pin = 123;
    private $count = 0;

    public function enterPin($inputPin)
    {
        if($this->count < 3)
        {
            if($this->pin == $inputPin)
            {
                echo "You've entered {$inputPin} the correct pin. Your ATM is activated Successfully<br/>";
            }
            else
            {
                $this->count++;
                echo "You've entered {$inputPin} the wrong pin.<br/>";
            }
        }
        else
        {
            echo "ATM Card is locked due to too many incorrect attempts.<br/>";
        }
    }
}

$atm = new ATM;
$atm->enterPin(111);
$atm->enterPin(111);
$atm->enterPin(123);


?>