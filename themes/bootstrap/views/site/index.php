<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Willkommen bei '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Die Reise hat ein Ende, Ihr habt uns gefunden...</p>
<p>Oder sollte man sagen, sie hat gerade erst begonnen?</p>

<?php $this->endWidget(); ?>

Leerer Content....<br />
<br />