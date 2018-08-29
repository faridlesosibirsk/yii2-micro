<?php

/* @var $this yii\web\View */
/* @var $model app\models\top */

//$this->title = $model->name;//'My Yii Application';
//$model->name;

use app\models\page\InterfacePage;
use app\models\page\DecoratorPage;
use app\models\page\Page;
use app\models\page\Paragraph;
use app\models\page\Title;
use app\models\page\Collection;

//echo $page=(new Title('Title', new Paragraph('Paragraph', new Page())))->Post();
$p1 = new Page();
$p3 = new Title('Title', $p1);
$p2 = new Paragraph('Paragraph', $p3);
echo $p2->Post();
/*
  $a[] = new Page();
  $a[] = new Title('Title', $a[count($a)-1]);
  $a[] = new Paragraph('Paragraph', $a[count($a)-1]);
  $a[count($a)-1]->Post();
  echo count($a);
 */
$b[] = new Page();
$b[] = new Title('Title');
$b[] = new Paragraph('Paragraph');
foreach ($b as $value) {
    $value->Post();
}
?>