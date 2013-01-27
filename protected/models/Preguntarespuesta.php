<?php

/**
 * This is the model class for table "preguntarespuesta".
 *
 * The followings are the available columns in table 'preguntarespuesta':
 * @property integer $id
 * @property integer $respuesta
 * @property integer $pregunta
 * @property integer $peticion
 *
 * The followings are the available model relations:
 * @property Peticion $peticion0
 * @property Pregunta $pregunta0
 * @property Respuesta $respuesta0
 */
class Preguntarespuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Preguntarespuesta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preguntarespuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta, pregunta, peticion', 'required'),
			array('respuesta, pregunta, peticion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, respuesta, pregunta, peticion', 'safe', 'on'=>'search'),
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
			'peticion0' => array(self::BELONGS_TO, 'Peticion', 'peticion'),
			'pregunta0' => array(self::BELONGS_TO, 'Pregunta', 'pregunta'),
			'respuesta0' => array(self::BELONGS_TO, 'Respuesta', 'respuesta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'respuesta' => 'Respuesta',
			'pregunta' => 'Pregunta',
			'peticion' => 'Peticion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('respuesta',$this->respuesta);
		$criteria->compare('pregunta',$this->pregunta);
		$criteria->compare('peticion',$this->peticion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}