<?php
//PHP Program to implement encapsulation
class ATM {

    private $custid;
    private $atmpin;

    //Function To Change ATM Pin
    public function PinChange($custid,$atmpin) {
        //Write function to change ATM pin
        echo("Function To Change ATM pin is: " .$atmpin. " for user " .$custid);
        echo "----";
    }
    //Function To Check Balance
    public function CheckBalance($custid) {
        //Write Function To Check Balance
        echo("Function To Check Account Balance of the user is:" .$custid);
    }
    
}
$obj = new ATM();
$obj->PinChange('1**3','10005285637');
$obj->CheckBalance('10005285637');
?>