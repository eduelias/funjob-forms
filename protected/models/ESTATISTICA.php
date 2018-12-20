<?php

class ESTATISTICA extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'ESTATISTICA':
	 * @var integer $idestatistica
	 * @var integer $idpesquisa
	 * @var integer $idformulario
	 * @var integer $idagrupamento
	 * @var integer $idpergunta
	 * @var integer $idresp_possivel
	 * @var string $data
	 * @var integer $codformulario
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
		return 'ESTATISTICA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('codformulario', 'numerical', 'integerOnly'=>true),
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
			'agrupamento' => array(self::BELONGS_TO, 'AGRUPAMENTOS', 'idagrupamento'),
			'formulario' => array(self::BELONGS_TO, 'FORMULARIO', 'idformulario'),
			'pergunta' => array(self::BELONGS_TO, 'PERGUNTAS', 'idpergunta'),
			'pesquisa' => array(self::BELONGS_TO, 'PESQUISA', 'idpesquisa'),
			'resposta' => array(self::BELONGS_TO, 'RESP_POSSIVEIS', 'idresp_possivel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idestatistica' => 'Idestatistica',
			'idpesquisa' => 'Idpesquisa',
			'idformulario' => 'Idformulario',
			'idagrupamento' => 'Idagrupamento',
			'idpergunta' => 'Idpergunta',
			'idresp_possivel' => 'Idresp Possivel',
			'data' => 'Data',
			'codformulario' => 'Codformulario',
		);
	}
}