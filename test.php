<?php

function groupByCategoryAndPrice(array $products): array {
    $result = [];

    foreach ($products as $product) {
        $category = $product['category'];
        $price = $product['price'];

       
        if ($price < 20) {
            $range = 'low';
        } elseif ($price >= 20 && $price <= 50) {
            $range = 'medium';
        } else {
            $range = 'high';
        }
        if (!isset($result[$category])) {
            $result[$category] = [];
        }
        $result[$category][$range][] = $product['name'];
    }return $result;
}

$products = [
    ['category' => 'beauty', 'name' => 'shampoo', 'price' => 15],
    ['category' => 'beauty', 'name' => 'Conditioner', 'price' => 30],
    ['category' => 'electronics', 'name' => 'Mouse', 'price' => 15],
    ['category' => 'electronics', 'name' => 'Laptop', 'price' => 45],
    ['category' => 'stationery', 'name' => 'Notebook', 'price' => 10],
    ['category' => 'stationery', 'name' => 'Book', 'price' => 25],
];

$groupedData = groupByCategoryAndPrice($products);
print_r($groupedData);

?>

