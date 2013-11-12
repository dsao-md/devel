<?php

/**
 * ContactForm Klasse
 * Hier werden Gueltigkeitsregeln und Beschriftungen fuer das Kontakt-Forumlar festgelegt
 * Es wird von der 'contact' action vom 'SiteController' genutzt
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Deklarierung der Gueltigkeits-Regeln, die bei Absenden geprueft werden
	 */
	public function rules()
	{
		return array(
			// Name, E-Mail, Betreff und Textkoerper muessen vorhanden sein
			array('name, email, subject, body', 'required'),
			// Email-Adresse muss eine gueltige Emailadresse sein
			array('email', 'email'),
			// Der Verifizierungscode muss korrekt eingegeben werden
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Deklarierung der Formular-Beschriftungen.
	 * Wenn nicht explizit Deklariert, wird das Attribut zu einem Label, 
	 * Wobei der erste Buchstabe Gross geschrieben wird (besser wie nichts :-P)
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verifizierungs-Code',
			'name'=>'Vor- und Zuname',
			'email'=>'E-Mail',
			'subject'=>'Betreff',
			'body'=>'Deine Nachricht',
		);
	}
}
