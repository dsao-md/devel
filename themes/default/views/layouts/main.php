<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="de" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseURL; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
	<link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseURL; ?>/css/ie8.css" media="all" />
	<![endif]-->
	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseURL; ?>/css/ie9.css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/ddsmoothmenu.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/retina.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/selectnav.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/mediaelement.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/mediaelementplayer.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/jquery.dcflickr.1.0.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/twitter.min.js"></script>
	<script type="text/javascript">
		$.backstretch("<?php echo Yii::app()->theme->baseURL; ?>/images/bg/forest_bg.jpg");
	</script>
</head>
<body>
<div class="scanlines"></div>

<!-- Beginn des Kopfes -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Beginn vom Logo -->
		<div class="logo">
		    <a href="/index.php">
			<h2>Das schwarze Auge online - Morgendämmerung</h2>
			</a>
	    </div>
		<!-- Ende vom Logo -->

		<!-- <ul id="yw2">  tiny mit yw2 tauschen!!! -->

		<!-- Beginn vom Top-Nav-Menue -->
		<div id="menu-wrapper">
			<div id="menu" class="menu">
	                <?php $this->widget('zii.widgets.CMenu',array(
	                        'items'=>array(
        	                        array('label'=>Yii::t('menu','Home'), 'url'=>array('/site/index')),
                	                array('label'=>Yii::t('menu','About'), 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>Yii::t('menu','Project'), 'url'=>array('/site/page', 'view'=>'project'), 'items'=>array(
						array('label'=>Yii::t('menu','History'), 'url'=>array('/site/page', 'view'=>'history')),
					)),
                        	        array('label'=>'Contact', 'url'=>array('/site/contact')),
                                	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
	                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
        	                ),
                	)); ?>

			</div>
		</div>
		<div class="clear"></div>
		<!-- EndE vom Menue -->
	</div>
</div>
<div class="wrapper">
<div class="intro">Die unendliche Reise - die Suche hat endlich ein Ende. Oder hat sie gar erst begonnen? </div>
<!-- Ende des Kopfbereiches -->

    <!-- Brotkruemel hier einpflegen -.- -->

        <?php echo $content; ?>


</div>
<!-- End Wrapper -->

<!-- Begin Footer -->
<div class="footer-wrapper">
<div id="footer" class="four">
		<div id="first" class="widget-area">
			<div class="widget widget_search">
				<h3 class="widget-title">Suche</h3>
				<form class="searchform" method="get" action="#">
					<input type="text" name="s" value="Begriff eingeben und Enter" onFocus="this.value=''" onBlur="this.value='Begriff eingeben und Enter'"/>
				</form>
			</div>
			<div class="widget widget_archive">
				<h3 class="widget-title">Neuigkeiten-Archiv</h3>
				<ul>
					<li><a href="#">November 2013</a> (10)</li>
					<li><a href="#">Oktober 2013</a> (0)</li>
					<li><a href="#">August 2013</a> (0)</li>
					<li><a href="#">Juli 2013</a> (0)</li>
					<li><a href="#">Juni 2013</a> (0)</li>
					<li><a href="#">Mai 2013</a> (0)</li>
				</ul>
			</div>	
		</div><!-- #first .widget-area -->
	
		<div id="second" class="widget-area">
			<div id="twitter-2" class="widget widget_twitter">
					<h3 class="widget-title">Soziale Netzwerke</h3>
					
					<div id="twitter-wrapper">
						<div id="twitter"></div>
						<span class="username"><a href="http://twitter.com/dsao-md">→ Follow @dsao-md auf Twitter</a></span><br />
						<span class="username"><a href="http://facebook.com">→ Like DSAo-Md auf Facebook</a></span>
					</div>
			</div>
		</div><!-- #second .widget-area -->
	
		<div id="third" class="widget-area">
		<div id="example-widget-3" class="widget example">
			<h3 class="widget-title">Aktivste Spieler</h3>
			<ul class="post-list">
			  	<li> 
			  		<div class="frame">
			  			<a href="#">AVATAR</a>
			  		</div>
					<div class="meta">
					    <h6><a href="#">Spielername</a></h6>
					    <em>20134 Abenteuerbeiträge</em>
				    </div>
				</li>
				<li> 
			  		<div class="frame">
			  			<a href="#">AVATAR</a>
			  		</div>
					<div class="meta">
					    <h6><a href="#">Spielername 2</a></h6>
					    <em>13933 Abenteuerbeiträge</em>
				    </div>
				</li>
			</ul>

		</div>
		</div><!-- #third .widget-area -->

		<div id="fourth" class="widget-area">
		<div class="widget">
			<h3 class="widget-title">Foto-Archiv</h3>
			<ul class="post-list">
				<li>
					<div class="frame">
						<a href="#">Blah</a>
					</div>
					<div class="meta">
						<h6><a href="#">Blah 2</a></h6>
						<em>blah</em>
					</div>
				</li>
			</ul>

		</div>
		</div><!-- #fourth .widget-area -->
	</div>
</div>
<div class="site-generator-wrapper">
	<div class="site-generator">&copy; 2007-2013 DSAo-Md. Veröffentlich unter der Lizenz GPL3.<br />Aktuelle Version: <i>noch keine</i></div>

</div>
<!-- End Footer --> 
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseURL; ?>/js/scripts.js"></script>
</body>
</html>
