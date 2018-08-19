<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<div class="w3-container"> 
    <h1>Countries</h1>
    <table class="w3-table-all w3-hoverable">
        <thead>
            <tr class="w3-blue">
                <th>Code</th>
                <th>Name</th>
                <th>Population</th>
            </tr>
        </thead>
        <?php foreach ($countries as $country): ?>
            <tr><td>
                    <?= Html::encode("{$country->code}") ?>:
                </td><td>
                    <?= Html::encode("{$country->name}") ?>:
                </td><td>
                    <?= $country->population ?>
                </td></tr>
        <?php endforeach; ?>
    </table>
<div class="w3-padding"> 
    <?=
    LinkPager::widget([
        'pagination' => $pagination,
        'options' => [
            'tag' => 'div',
            'class' => 'pagination',
        ],
        'activePageCssClass' => 'active',
    ])
    ?>
</div></div>