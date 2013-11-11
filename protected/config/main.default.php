<?php

// Folgende Pfad-Aliase sind gepflegt
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
// Folgend die Hauptkonfiguration
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'DSAo-Md',
        'theme'=>'bootstrap',
	// Vorladen der Log-Komponente
	'preload'=>array('log'),

	// Automatisches laden von Modellen und Komponenten-Klassen
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// Das Gii-Modul (Code-Generierung etc pp)

		'gii'=>array(
			'generatorPaths'=>array(
	                	'bootstrap.gii',
			),
			'class'=>'system.gii.GiiModule',
			'password'=>'q1w2e3',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// Applikations-Komponenten
	'components'=>array(
		'user'=>array(
			// Aktiviere cookie-basierte Authentifikation
			'allowAutoLogin'=>true,
		),

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// Folgend die MySQL Verbindung

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// Auf der Seite site/error werden die Error-Meldungen angezeigt
			'errorAction'=>'site/error',
		),

		// Das Bootstrap Layout
	        'bootstrap'=>array(
        	    'class'=>'bootstrap.components.Bootstrap',
	        ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// Kommentar entfernen um Logmeldungen auf der HP angezeigt zu bekommen
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// Applikations-Level Parameter, auf denen zugegriffen werden koennen
	// using Yii::app()->params['paramName'] -> z.B. Yii::app()->params['adminEmail'] gibt tbanus1@gmail.com zurueck
	'params'=>array(
		// adminEmail wird im Kontaktformular verwendet
		'adminEmail'=>'tbanus1@gmail.com',
	),
);
