<?php

interface PaymentInterface
{
    public function pay();
}

interface InternacionalPaymentInterface extends PaymentInterface
{
    public function payDuty();
}

class Paypal implements InternacionalPaymentInterface{

    public function pay()
    {
        return 'Pay with Paypal';
    }

    public function payDuty()
    {
        return 'Duty Pay with Paypal';
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

    public function PayDuty(InternacionalPaymentInterface $payment)
    {
        var_dump($payment->payDuty());
    }
}

  

$payment = new Payment;

$payment->pay(new MercadoLivre); 
PHP_EOL;
$payment->pay(new Paypal); 
PHP_EOL;
$payment->payDuty(new Paypal); 
PHP_EOL;
$payment->pay(new Iugu);//teste: simulando erro
PHP_EOL;

$paypal = new Paypal;
var_dump($paypal->pay());

