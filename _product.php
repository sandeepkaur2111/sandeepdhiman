<?php 
use Yii\helpers\Url;
use test\components\ReduceDescription;
?>

<div class="col-sm-12'>
<div class ='product_overlay">
<h2><?= $model->title; ?> </h2>
<p><?= ReduceDescription::widget(['body' =>$model->description,'count'=>100]) ?> </p>
</div>
</div>