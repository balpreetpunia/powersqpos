<?php

$errorMSG ='';

if ($_POST['model']!='') {
    $model = $_POST['model'];
} else {
    $model = ''; $errorMSG = "<li>Model is required</li>";
}
$upc = isset($_POST['upc']) ? $_POST['upc'] : '';
$brand = isset($_POST['brand']) ? $_POST['brand'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : 0.00;
$cost = isset($_POST['cost']) ? $_POST['cost'] : 0.00;
if ($_POST['inventory']!=0) {
    $inventory = $_POST['inventory'];
} else {
    $inventory = 0;  $errorMSG .= "<li>Stock is required</li>";
}

if ($errorMSG!=''){
    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
    exit;
}


require_once ('../../includes/requires/connect.php');

        $stmt = $con->prepare("INSERT INTO products (model, upc, brand, category, price,  cost, inventory) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssddi", $model, $upc, $brand, $category, $price, $cost, $inventory);
        if($stmt->execute()){
            echo json_encode(['code'=>200, 'msg'=>'Product Saved Successfully']);
            exit;
        }
        else{
            echo json_encode(['code'=>404, 'msg'=>'Error']);
        }



