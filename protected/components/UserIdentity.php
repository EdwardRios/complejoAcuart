<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$usuario=Usuario::model()->find("LOWER(Nombre)=?",array(strtolower($this->username)));

		if($usuario===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$usuario->Passw)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
		
			$this->_id=$usuario->Id;
			//$this->setState("Estado",$usuario->Estado);
			$this->setState("tipo",$usuario->tipo);
			//$this->setState("Empresa",$usuario->Empresa);
			
			
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	public function getid()
	{
		return $this->_id;
	}



	public function authenticates()
	{
		$cliente=Cliente::model()->find("LOWER(Nombre)=?",array(strtolower($this->username)));

		if($cliente===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$cliente->Passw)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
		
			$this->_id=$cliente->ID;
			//$this->setState("Estado",$cliente->Estado);
			$this->setState("tipo",$cliente->tipo);
			//$this->setState("Empresa",$cliente->Empresa);
			
			
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	
}