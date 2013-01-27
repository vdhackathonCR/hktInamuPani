<?php

/**
 * This is the model class for table "valorrepuesta".
 *
 * The followings are the available columns in table 'valorrepuesta':
 * @property integer $id
 * @property integer $respuesta
 * @property integer $cola
 * @property integer $valor
 *
 * The followings are the available model relations:
 * @property Respuesta $respuesta0
 * @property Cola $cola0
 */
class Valorrepuesta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Valorrepuesta the static model class
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
		return 'valorrepuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta, cola, valor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, respuesta, cola, valor', 'safe', 'on'=>'search'),
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
			'cola0' => array(self::BELONGS_TO, 'Cola', 'cola'),
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
			'cola' => 'Cola',
			'valor' => 'Valor',
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
		$criteria->compare('cola',$this->cola);
		$criteria->compare('valor',$this->valor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}