<?php

include_once "./abstract/paymentTypes.abstract.php";
include_once "./classes/buyProduct.class.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();