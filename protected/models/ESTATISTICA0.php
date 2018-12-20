<?php

class ESTATISTICA0 extends CActiveRecord
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
			array('idresp_possivel', 'required'),
		);
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idestatistica' => 'ID',
			'idpesquisa' => 'Idpesquisa',
			'idformulario' => 'Idformulario',
			'idagrupamento' => 'GRP',
			'idpergunta' => 'Pergunta',
			'idresp_possivel' => 'Resposta',
			'codformulario' => 'FRM',
		);
	}
}