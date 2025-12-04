<?php
    $user = "Jerico";
    $pagbati = "Hello, " . $user . "!";
    $offer = ["Snickers", 5, 25, 19];
    $reg_price = $offer[1] * $offer[2];
    $offer_price = $offer[1] * $offer[3];
    $saving = $reg_price - $offer_price;
?>
    <?php require 'includes/header.php'; ?>
    <h2><?= $pagbati ?></h2>
    <p class="offer">
        Buy <strong><?= $offer[1] ?></strong> packs of <strong><?= $offer[0] ?></strong> and get a discount!
    </p>
    <p>
        Regular: <strong>Php<?= $reg_price ?></strong>
        Discounted: <strong>Php<?= $offer_price ?></strong><br>
    </p>

    <?php include 'includes/footer.php'; ?>
    </body>
</html>