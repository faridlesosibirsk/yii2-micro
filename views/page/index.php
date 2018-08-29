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

//echo $page=(new Title('Title', new Paragraph('Paragraph', new Page())))->Post();
$p1=new Page();
$p3=new Title('Title', $p1);
$p2=new Paragraph('Paragraph', $p3);
echo $p2->Post();

?>