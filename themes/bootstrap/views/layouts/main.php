<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'type'=>'inverse',
    'brand'=>'DSAo-Md',
    'brandUrl'=>array('/site/index'),
    'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Das Projekt', 'url'=>'#', 'items'=>array(
			array('label'=>'Vision', 'url'=>array('/site/info/vision')),
			array('label'=>'FAQ', 'url'=>array('/site/info/faq')),
			'---', //Trennlinie
			array('label'=>'Quicklinks'),
			array('label'=>'Bugtracker', 'url'=>array('http://dsaomd.thebuggenie.com/dsaomd/issues/open')),
		)),
                array('label'=>'Kontakt', 'url'=>array('/site/contact')),
                array('label'=>'Anmelden', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'('.Yii::app()->user->name.') abmelden', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
	array(
	    'class'=>'bootstrap.widgets.TbMenu',
	    'htmlOptions'=>array('class'=>'pull-right'),
	    'items'=>array(
		array('label'=>'Keine neuen Nachrichten', 'url'=>array('site/news/inbox')),
		),
	     ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyleft &copy; 2003 by DSAo-Md. Released under the GPL3. Release: <i>not released yet</i><br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
