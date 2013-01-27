<?php

/**
 * This is the model class for table "respuesta".
 *
 * The followings are the available columns in table 'respuesta':
 * @property integer $id
 * @property string $respuesta
 * @property integer $pregunta
 *
 * The followings are the available model relations:
 * @property Pregunta[] $preguntas
 * @property Preguntarespuesta[] $preguntarespuestas
 * @property Pregunta $pregunta0
 */
class Respuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Respuesta the static model class
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
		return 'respuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta, pregunta', 'required'),
			array('pregunta', 'numerical', 'integerOnly'=>true),
			array('respuesta', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, respuesta, pregunta', 'safe', 'on'=>'search'),
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
			'preguntas' => array(self::HAS_MANY, 'Pregunta', 'respuesta'),
			'preguntarespuestas' => array(self::HAS_MANY, 'Preguntarespuesta', 'respuesta'),
			'pregunta0' => array(self::BELONGS_TO, 'Pregunta', 'pregunta'),
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
		$criteria->compare('respuesta',$this->respuesta,true);
		$criteria->compare('pregunta',$this->pregunta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}