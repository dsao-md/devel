<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- Kopf -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
            array(
               'label'=>Yii::t('menu','home'),
               'url'=>array('/site/index')
            ),
            array(
               'label'=>Yii::t('menu','about_us'),
               'url'=>array('/site/page', 'view'=>'about'),
               'items'=>array(
                  array(
                     'label'=>Yii::t('menu','project'),
                     'url'=>array('/site/page', 'view'=>'project')
                  ),
                  array(
                     'label'=>Yii::t('menu','history'),
                     'url'=>array('/site/page',
                     'view'=>'history')
                  ),
                  array(
                     'label'=>Yii::t('menu','team'),
                     'url'=>array('/site/page',
                     'view'=>'team')
                  ),
                  array(
                     'label'=>Yii::t('menu','thanks'),
                     'url'=>array('/site/page', 'view'=>'thanks')
                  ),
                  array(
                     'label'=>Yii::t('menu','contact'),
                     'url'=>array('/site/contact')
                  ),
               ) 
            ),
				array(
				   'label'=>'About', 
				   'url'=>array('/site/page', 'view'=>'about')
				),
				array(
				   'label'=>Yii::t('menu','contact'),
				   'url'=>array('/site/contact')
				),
				array(
				   'label'=>Yii::t('menu','rights'),
				   'url'=>array('/rights'),
				//   'visible'=>Yii::app()->user->isAdmin
				),
				array(
				   'label'=>'Login', 
				   'url'=>array('/user/login'), 
				   'visible'=>Yii::app()->user->isGuest
				),
				array(
				   'label'=>'Logout ('.Yii::app()->user->name.')', 
				   'url'=>array('/user/logout'), 
				   'visible'=>!Yii::app()->user->isGuest
				)
			),
		)); ?>
	</div><!-- Hauptmenue -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyleft &copy; 2007-2013 by DSAo-Md. Released under GPL3. <i>Release: not released yet</i><br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
