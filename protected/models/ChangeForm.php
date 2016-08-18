<?php

class ChangeForm extends CFormModel{
	public $passw;
	public $passw_new;
	public $passw_new_repeat;

	public function rules(){
		return array(
			array('passw,passw_new,passw_new_repeat','required'),
			array('passw_new','compare'),
			array('passw','verify'),
		);
	}

	public function verify($attribute, $params){
		$model = Usuario::model()->findByPk(Yii::app()->user->Id);
		if ($model->Passw !== sha1($this->passw)) {
			$this->addError('passw','Contraseña incorrecta');
		}
	}

	public function attributeLabels(){
		return array(
			'passw'=>'Contraseña',
			'passw_new'=>'Nueva contraseña',
			'passw_new_repeat'=>'Confirmar contraseña',
		);
	}

	public function change(){
		if (!$this->hasErrors()) {
			$model = Usuario::model()->findByPk(Yii::app()->user->Id);
			$model->Passw = sha1($this->passw_new);
			return $model->save();
		}
		return false;
	}

}
