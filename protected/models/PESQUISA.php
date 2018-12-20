<?php

class PESQUISA extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'PESQUISA':
	 * @var integer $idpesquisa
	 * @var string $data
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return 'PESQUISA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('idpesquisa', 'required'),
			array('idpesquisa', 'numerical', 'integerOnly'=>true),
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
			'eSTATISTICAs' => array(self::HAS_MANY, 'Estatistica', 'idpesquisa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpesquisa' => 'Idpesquisa',
			'data' => 'Data',
		);
	}
}