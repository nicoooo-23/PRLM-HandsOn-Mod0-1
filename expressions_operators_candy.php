<?php
    $sizes = [
        '10g' => 15,
        '25g' => 20,
        '40g' => 30
    ];
    $quantity = 4;
    $cost = 15;
    $subtotal = $cost * $quantity;
    $tax = ($subtotal/100) * 12;
    $total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions and Operators</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1><img src="img/logo.png">The Candy Store</h1>
    <h2>Available Sizes</h2>
    <table>
        <tr>
            <th>Size (in grams)</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>10g</td>
            <td><?= $sizes['10g']?></td>
        </tr>
        <tr>
            <td>25g</td>
            <td><?= $sizes['25g']?></td>
        </tr>
        <tr>
            <td>40g</td>
            <td><?= $sizes['40g']?></td>
        </tr>
    </table>
    <h2>Order</h2>
    <p>Size: 10g</p>
    <p>Quantity: <?= $quantity ?></p>
    <p>Cost (each): P<?= $sizes['10g']?></p>
    <p>Subtotal: P<?= $subtotal ?></p>
    <p>Tax: P<?= $tax ?></p>
    <p>Total: P<?= $total ?></p>
</body>
</html>