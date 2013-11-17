<?php

class SiteController extends Controller
{
   
	/**
	 * Deklariert Klassenbasierte Aktionen
	 */
	public function actions()
	{
		return array(
		
         /**
          * Captcha Aktion rendert das CAPTCHA Bild z.B. auf der Kontakt-Seite
          */
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			
			/**
			 * Die "page-action" rendert die statischen Seiten, welche unter 
			 * /protected/views/site/pages gespeichert sind.
			 * Aufgerufen werden sie ueber: index.php/site/page&view=Dateiname
			 */
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * Dies ist die default index-Aktion. Sie wird aufgerufen, wenn eine Aktion
	 * nicht explizit von einem User genannt wird.
	 */
	public function actionIndex()
	{
	   /**
	    * Rendert die View-Datei 'protected/views/site/index.php'
	    * und benutzt hierbei das default-Layout 'protected/views/layouts/main.php'
	    */
		$this->render('index');
	}

	/**
	 * Dies ist die Aktion, die externe Ausnahmen behandelt.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Zeigt die Kontakt-Seite, incl. Mail-Handler
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Danke, dass Du uns geschrieben hast. Wir werden so schnell wie möglich antworten.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
}
