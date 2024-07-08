<?php require("partials/header.php"); ?>

<?php require("partials/nav.php"); ?>

<div id="mainList">
    <table id="newGroceryTable">
    <tr>
        <th>Product</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
  <?php
    foreach($new_list as $item) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($item["name"]) . "</td>";
      echo "<td>" . $item["unit_price"] . "</td>";
      echo "<td>" . $item["quantity"] . "</td>";
      echo "<td>" . number_format(($item["unit_price"]*$item["quantity"]), 2) . "</td>";
      echo "</tr>";
    };
  ?>
    <tr>
        <td>Totaal</td>
        <td></td>
        <td></td>
        <td id="totalCost"><?php echo number_format($newTotalCost, 2) ?></td>
    </tr>
  </table>
</div>
<?php require("partials/footer.php"); ?>

