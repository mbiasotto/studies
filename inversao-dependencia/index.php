<?php

interface PaymentInterface
{
    public function pay();
}

class Paypal implements PaymentInterface{

    public function pay()
    {
        return 'Pay with Paypal';
    }
}

class PagSeguro implements PaymentInterface{

    public function pay()
    {
        return 'Pay with Pag Seguro';
    }
}

class MercadoLivre implements PaymentInterface{

    public function pay()
    {
        return 'Pay with Mercado Livre';
    }
}

class Payment
{
    public function Pay(PaymentInterface $payment)
    {
        var_dump($payment->pay());
    }
}

$payment = new Payment;
$payment->pay(new MercadoLivre);
$payment->pay(new Iugu);//teste: simulando erro