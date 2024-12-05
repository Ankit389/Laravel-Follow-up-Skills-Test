<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataFile = '../data.json';

    // Get existing product data
    $products = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    // Get input data
    $productName = $_POST['productName'];
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $datetime = date('m/d/Y, h:i:s A');
    $totalValue = $quantity * $price;

    if (isset($_POST['editIndex'])) {
        // Update existing product
        $products[$_POST['editIndex']] = [
            'productName' => $productName,
            'quantity' => $quantity,
            'price' => $price,
            'datetime' => $datetime,
            'totalValue' => $totalValue
        ];
    } else {
        // Add new product
        $products[] = [
            'productName' => $productName,
            'quantity' => $quantity,
            'price' => $price,
            'datetime' => $datetime,
            'totalValue' => $totalValue
        ];
    }

    // Save updated data to the file
    file_put_contents($dataFile, json_encode($products));

    // Return updated products list
    echo json_encode($products);
}
