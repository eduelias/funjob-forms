<?php

class PERGUNTAS extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'PERGUNTAS':
	 * @var integer $idpergunta
	 * @var string $descricao
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
		return 'PERGUNTAS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('descricao','length','max'=>200),
			array('idpergunta', 'required'),
			array('idpergunta', 'numerical', 'integerOnly'=>true),
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
			'estat' => array(self::HAS_MANY, 'Estatistica', 'idpergunta'),
			'grupos' => array(self::MANY_MANY, 'Agrupamentos', 'rel_agrup_perg(idagrupamento, idpergunta)'),
			'repossiveis' => array(self::MANY_MANY, 'RESP_POSSIVEIS', 'rel_perg_respos(idpergunta, idresp_possivel)')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpergunta' => 'Idpergunta',
			'descricao' => 'Descricao',
		);
	}
}