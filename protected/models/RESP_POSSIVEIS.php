<?php

class RESP_POSSIVEIS extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'RESP_POSSIVEIS':
	 * @var integer $idresp_possivel
	 * @var string $descricao
	 * @var string $tipo
	 * @var string $codbarra
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
		return 'RESP_POSSIVEIS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('descricao','length','max'=>200),
			array('tipo','length','max'=>100),
			array('codbarra','length','max'=>45),
			array('idresp_possivel', 'required'),
			array('idresp_possivel', 'numerical', 'integerOnly'=>true),
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
			'eSTATISTICAs' => array(self::HAS_MANY, 'Estatistica', 'idresp_possivel'),
			'pERGUNTASes' => array(self::MANY_MANY, 'Perguntas', 'rel_perg_respos(idpergunta, idresp_possivel)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idresp_possivel' => 'Idresp Possivel',
			'descricao' => 'Descricao',
			'tipo' => 'Tipo',
			'codbarra' => 'Codbarra',
		);
	}
}