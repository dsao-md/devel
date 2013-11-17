<?php

/**
 * LoginForm Klasse
 * LoginForm ist die Datenstruktur für das Bereitstellen der 
 * Benutzerlogin Formulardaten. Wird von der 'login' action vom SiteController genutzt
  */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Deklariert die Gültigkeitsregeln.
	 * Die Regeln überprüfen, ob der Benutzername und Passwort gegeben sind
	 * und dass das Passwort für die Authentifizierung notwendig ist
	 */
	public function rules()
	{
		return array(
		   /**
		    * Benutzername und Passwort sind notwendig
		    */
			array('username, password', 'required'),

         /**
          * rememberMe muss boolean sein (true, false)
          */
			array('rememberMe', 'boolean'),
			
			/**
			 * Passwort muss authentifiziert sein
			 */
			array('password', 'authenticate'),
		);
	}

	/**
	 * Deklariert die Attribut-Beschriftungen
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe' => 'Anmeldung beim nächsten mal merken',
			'username'   => 'Benutzername',
			'password'   => 'Passwort',
		);
	}

	/**
	 * Authentifiziert das Passwort
	 * Dies ist die 'authenticate' Überprüfung, welche in rules() deklariert ist 
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Falscher Benutzername und/oder Passwort.');
		}
	}

	/**
	 * Loggt den Benutzer mit dem angegebenen Benutzernamen und Passwort im Model ein
	 * @return boolean wenn der Login erfolgreich war
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; /** Entspricht 30 Tage */
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
