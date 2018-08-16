<?php
/* @var $this yii\web\View */
/* @var $store app\models\StoreController */

$this->title = 'Store';
$id = 100;
$quantity = 1;
$store->getRegister()->makeNewSale();
$store->getRegister()->enterItem($id, $quantity);
?>
<div class="w3-row w3-margin">
    <div class="w3-half w3-container w3-border">
        <h2 class="w3-text-blue">Register</h2>
        <table class="w3-table w3-bordered">
            <tr>
                <th>Total Sale</th>
                <th style="text-align:right"><?= print_r($store->getRegister()->getTotalSale(), 'jk') ?>
                &ThinSpace;₽
                </th>
            </tr>
        </table>
        <h2>&ThinSpace;</h2>
    </div>
    <div class="w3-half w3-container">
        <form class="w3-container w3-card" action="/action_page.php">
            <h2 class="w3-text-blue">Catalog</h2>
            <p>Use any ID 100 and 200 .</p>
            <p>      
                <label class="w3-text-blue"><b>id</b></label>
                <input class="w3-input w3-border" name="first" type="text"></p>
            <p>      
                <label class="w3-text-blue"><b>quantity</b></label>
                <input class="w3-input w3-border" name="last" type="text"></p>
            <p>      
                <button class="w3-button w3-hover-red w3-blue">get Total Sale</button></p>
        </form>
    </div>
</div> 
