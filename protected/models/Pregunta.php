<?php

/**
 * This is the model class for table "pregunta".
 *
 * The followings are the available columns in table 'pregunta':
 * @property integer $id
 * @property string $pregunta
 * @property integer $respuesta
 *
 * The followings are the available model relations:
 * @property Respuesta $respuesta0
 * @property Preguntarespuesta[] $preguntarespuestas
 * @property Respuesta[] $respuestas
 */
class Pregunta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pregunta the static model class
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
		return 'pregunta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pregunta', 'required'),
			array('respuesta', 'numerical', 'integerOnly'=>true),
			array('pregunta', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pregunta, respuesta', 'safe', 'on'=>'search'),
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
			'respuesta0' => array(self::BELONGS_TO, 'Respuesta', 'respuesta'),
			'preguntarespuestas' => array(self::HAS_MANY, 'Preguntarespuesta', 'pregunta'),
			'respuestas' => array(self::HAS_MANY, 'Respuesta', 'pregunta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pregunta' => 'Pregunta',
			'respuesta' => 'Respuesta',
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
		$criteria->compare('pregunta',$this->pregunta,true);
		$criteria->compare('respuesta',$this->respuesta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}