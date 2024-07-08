<?php require("partials/header.php"); ?>
<?php require("partials/nav.php") ?>
    <div>
        <form method="POST"  id="addGroceries">
            <div id="productName">
                <label for="name">Product:</label><br>
                <input id="name" name="name" type="text" required >
                <?php if(isset($errors["name"])): ?>
                <p class="error"><?= htmlspecialchars($errors["name"]) ?></p>
                <?php endif; ?>
            </div><br><br>

            <div id="productQuantity">
                <label for="quantity">Quantity:</label><br>
                <input id="quantity" name="quantity" type="number" required>
                <?php if(isset($errors["quantity"])): ?>
                <p class="error"><?= htmlspecialchars($errors["quantity"]) ?></p>
                <?php endif; ?>
                <br>
            </div><br><br>

            <div id="productPricePerUnit">
                <label for="unit_price">Unit price:</label><br>
                <input id="unit_price" name="unit_price" type="number" step=".01" required>
                <?php if(isset($errors["unit_price"])): ?>
                <p class="error"><?= htmlspecialchars($errors["unit_price"]) ?></p>
                <?php endif; ?>
                <br>
            </div><br><br>

            <button id="submit" type="submit">Submit</button>
        </form>

    </div>
<?php require("partials/footer.php"); ?>
