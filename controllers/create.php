<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";
$db = new Database($config['database']);
$heading = "Add new items to grocery list";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $unit_price = $_POST["unit_price"];
    $errors = [];

    if (! Validator::string($name, 2, 100)) {
        $errors["name"] = "Product name must be between 2 and 100 characters.";
    }

    if (!Validator::integer($quantity, 1, 99)) {
        $errors["quantity"] = "Quantity must be a number between 1 and 99.";
    }

    if (!Validator::decimal($unit_price, 0.01, 999.99)) {
        $errors["unit_price"] = "Unit price must be a number between 0.01 and 999.99.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO groceries(name, quantity, unit_price) VALUES(:name, :quantity, :unit_price)", [
            "name" => $_POST["name"],
            "quantity" => $_POST["quantity"],
            "unit_price" => $_POST["unit_price"]
        ]);
        header("Location: /");
    }


}
require "views/create.view.php";