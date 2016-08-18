<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property integer $ID
 * @property string $Estado
 * @property string $Fecha
 * @property integer $idCliente
 * @property integer $idPersonal
 * @property integer $idHorario
 * @property integer $idAreaDeportiva
 *
 * The followings are the available model relations:
 * @property Areadeportiva $idAreaDeportiva0
 * @property Cliente $idCliente0
 * @property Horario $idHorario0
 * @property Personal $idPersonal0
 */
class Reserva extends CActiveRecord
{
	public $cliApellidoCliente;
	public $perNombre;
	public $horHoraInicio;
	public $areaNombre;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Estado, Fecha, idCliente, idUsuario, idHorario, idAreaDeportiva', 'required'),
			array('idCliente, idUsuario, idHorario, idAreaDeportiva', 'numerical', 'integerOnly'=>true),
			array('Estado', 'length', 'max'=>10),
			array('cliApellidoCliente', 'safe'),
			array('perNombre', 'safe'),
			array('horHoraInicio', 'safe'),
			array('areaNombre', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, Estado, Fecha, idCliente, idUsuario, idHorario, idAreaDeportiva', 'safe', 'on'=>'search'),
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
			'idAreaDeportiva0' => array(self::BELONGS_TO, 'Areadeportiva', 'idAreaDeportiva'),
			'idCliente0' => array(self::BELONGS_TO, 'Cliente', 'idCliente'),
			'idHorario0' => array(self::BELONGS_TO, 'Horario', 'idHorario'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'cli'=>array(self::BELONGS_TO,'Cliente','idCliente'),
			'per'=>array(self::BELONGS_TO,'Usuario','idUsuario'),
			'hor'=>array(self::BELONGS_TO,'Horario','idHorario'),
			'area'=>array(self::BELONGS_TO,'Areadeportiva','idAreaDeportiva'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Estado' => 'Estado',
			'Fecha' => 'Fecha',
			'idCliente' => 'Cliente',
			'idUsuario' => 'Usuario',
			'idHorario' => 'Horario',
			'idAreaDeportiva' => 'Area Deportiva',
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
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('idCliente',$this->idCliente);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('idHorario',$this->idHorario);
		$criteria->compare('idAreaDeportiva',$this->idAreaDeportiva);
		
		$criteria->with=array('cli',);
		$criteria->addSearchCondition('cli.ApellidoCliente', $this->cliApellidoCliente);


		$criteria->with=array('per',);
		$criteria->addSearchCondition('per.Nombre', $this->perNombre);

		$criteria->with=array('hor',);
		$criteria->addSearchCondition('hor.HoraInicio', $this->horHoraInicio);

		$criteria->with=array('area',);
		$criteria->addSearchCondition('area.Nombre', $this->areaNombre);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reserva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
