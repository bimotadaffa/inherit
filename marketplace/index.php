<?php

require 'Discount.php';
require 'Payment.php';

$cart = [
    [
        "name" => "cireng",
        "price" => 200000
    ],
    [
        "name" => "sosis",
        "price" => 50000
    ],
    [
        "name" => "bakso",
        "price" => 10000
    ]
];

$totalBelanja = 0;
$total = 0;
foreach($cart as $item) {
    $totalBelanja += $item["price"];
}
$total = $totalBelanja;
//count discount
$discount = new Discount($totalBelanja);
$getDiscount = $discount->countDiscount(); 
$total -= $getDiscount;
//payment
$payment = new PaymentBCA($total);
$payment->getPotonganPegawai();
$notifPayment = $payment->pay();
$total = $payment->getTotal();
//checkout
echo "------------------- \n";
foreach($cart as $item) {
    echo "{$item['name']}     {$item['price']} \n";
}
echo "Total belanja = {$totalBelanja} \n";
echo "Discount = {$getDiscount} \n";
echo "Total = {$total} \n";
echo "{$notifPayment}";
echo "------------------- \n";
// echo $getDiscount;

?>