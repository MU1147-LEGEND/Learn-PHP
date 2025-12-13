<?php

// interfaces

interface PaymentInterface
{
    public function payNow();
    public function paymentProcess();
}
interface LoginInterface
{
    public function loginFirst();
    public function paymentProcess();
}

// classes
class Paypal implements PaymentInterface, LoginInterface
{
    public function loginFirst() {}
    public function payNow() {}

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class BangTransfer implements PaymentInterface, LoginInterface
{
    public function loginFirst() {}
    public function payNow() {}

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface
{
    public function payNow() {}

    public function paymentProcess()
    {
        $this->payNow();
    }
}

class Cash implements PaymentInterface
{
    public function payNow() {}

    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }

    public function onlinePay(LoginInterface $paymentType){
        $paymentType->paymentProcess();
    }
}


$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);