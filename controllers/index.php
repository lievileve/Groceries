<?php
require "Database.php";
$heading = "Grocery list";

$config = require("config.php");
$db = new Database($config['database']);
$new_list = $db->query("select name, quantity, unit_price from groceries")->get();

$newTotalCost = array_reduce($new_list, function($carry, $item) {
  return $carry + ($item["unit_price"] * $item["quantity"]);
},0 );



require "views/index.view.php";

