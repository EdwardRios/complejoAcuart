<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $Id
 * @property string $Nombre
 * @property string $Apellido
 * @property integer $CI
 * @property string $Direccion
 * @property integer $Telefono
 * @property string $Passw
 * @property integer $tipo
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Apellido, CI, Direccion, Passw','required'),
			array('CI, Telefono, tipo', 'numerical', 'integerOnly'=>true),
			array('Nombre', 'length', 'max'=>30),
			array('Apellido, Passw', 'length', 'max'=>50),
			array('Direccion', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, Nombre, Apellido, CI, Direccion, Telefono, Passw, tipo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Nombre' => 'Nombre Usuario',
			'Apellido' => 'Apellido',
			'CI' => 'Ci',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Passw' => 'Passw',
			'tipo' => 'Tipo',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('CI',$this->CI);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('Passw',$this->Passw,true);
		$criteria->compare('tipo',$this->tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function tolist(){
		$model = self::model()->findAll();
		return CHtml::listData($model,'Id','Apellido');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
