<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $ID
 * @property integer $CI
 * @property string $Nombre
 * @property string $Apellidos
 * @property string $email
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $Sexo
 * @property integer $tipo
 *
 * The followings are the available model relations:
 * @property Reserva[] $reservas
 * @property Solicita[] $solicitas
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CI, Nombre, ApellidoCliente, Direccion, Sexo, email', 'required'),
			array('CI, Telefono', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>60),
			array('ApellidoCliente', 'length', 'max'=>30),
			array('email', 'length', 'max'=>150),
			array('Direccion', 'length', 'max'=>120),
			array('Sexo', 'length', 'max'=>10),
			//array('Passw', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, CI, Nombre, ApellidoCliente, email, Direccion, Telefono, Sexo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'reservas' => array(self::HAS_MANY, 'Reserva', 'idCliente'),
			'solicitas' => array(self::HAS_MANY, 'Solicita', 'idCliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'CI' => 'Ci',
			'Nombre' => 'Nombre',
			'ApellidoCliente' => 'Apellido Cliente',
			'email' => 'Email',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Sexo' => 'Sexo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		


		$criteria->compare('ID',$this->ID);
		$criteria->compare('CI',$this->CI);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('ApellidoCliente',$this->ApellidoCliente,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('Sexo',$this->Sexo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function tolist(){
		$model = self::model()->findAll();
		return CHtml::listData($model,'ID','ApellidoCliente');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
