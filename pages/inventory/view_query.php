<?php

$model = isset($_POST['model']) ? $_POST['model'] : '';
if($model==''){
    exit;
}

require_once ('../../includes/requires/connect.php');


    $stmt = $con->prepare("SELECT id, model, brand, category, price, cost, inventory FROM products WHERE model like "."'%"."$model"."%'");
    $stmt->execute();
    $stmt->bind_result($id, $model, $brand, $category, $price, $cost, $inventory);

    $products = array();

    while($stmt->fetch()){
        $product  = array();
        $product['id'] = $id;
        $product['model'] = $model;
        $product['brand'] = $brand;
        $product['category'] = $category;
        $product['price'] = $price;
        $product['cost'] = $cost;
        $product['inventory'] = $inventory;

        array_push($products, $product);
    }

    print json_encode($products);
    return $products;