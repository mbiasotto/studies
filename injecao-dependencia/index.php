<?php

class Address
{
    public $address;
    public $number;

    public function __construct(string $address, int $number)
    {
        $this->address = $address;
        $this->number = $number;
    }
}

class User{

    private Address $address;

    public function addAddress(string $address, int $number){
        $this->address = new Address($address, $number);
    }

    public function getAddress(){
        return $this->address;
    }
    
}

$user = new User;
$user->addAddress('Minha rua',16);

var_dump($user->getAddress());

class User2{

    private Address $address;

    public function addAddress(Address $address){
        $this->address = $address;
    }

    public function getAddress(){
        return $this->address;
    }
    
}

PHP_EOL;

$user2 = new User2;
$user2->addAddress(new Address('Minha rua',16));

var_dump($user2->getAddress());

