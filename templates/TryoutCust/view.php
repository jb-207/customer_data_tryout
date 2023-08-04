<!-- templates/TryoutCust/view.php -->

<div class="container">
    <?php
    // echo  "<pre> sdfsd: ";
    // print_r($customer);
    // echo "</pre>";
    ?>
    <h1><?= h($customer->customer_name) ?></h1>
    <p>Description: <?= h($customer->tryout_cust_desc->description) ?></p>
    <p>Kit ID: <?= h($customer->tryout_cust_kit->kit_id) ?></p>
</div>
