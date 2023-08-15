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
$notifPayment = $payment->pay();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="0">
        <tr>
            <td>Catalog</td>
            <td>Qty</td>
            <td>Price</td>
        </tr>
        <?php foreach($cart as $item): ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td>1</td>
                <td><?= $item['price'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <p>Total belanja = <?= $totalBelanja ?></p>
    <p>Discount = <?= $getDiscount ?></p>
    <p>Total = <?= $total ?></p>
</body>
</html>