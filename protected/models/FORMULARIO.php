<?php

class FORMULARIO extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'FORMULARIO':
	 * @var integer $idformulario
	 * @var string $nomeform
	 * @var string $long_desc
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
		return 'FORMULARIO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('nomeform','length','max'=>45),
			array('long_desc','length','max'=>100),
			array('nomeform, data', 'required'),
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
			'estat' => array(self::HAS_MANY, 'ESTATISTICA', 'idformulario'),
			'count' => array(self::HAS_MANY, 'ESTATISTICA', 'idformulario', 'group'=>'codformulario'),
			'lastform' => array(self::HAS_ONE, 'ESTATISTICA', 'idformulario','select'=>'codformulario', 'order'=>'data DESC'),
			'grupos' => array(self::MANY_MANY, 'AGRUPAMENTOS', 'rel_form_agrup(idformulario, idagrupamento)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idformulario' => 'Idformulario',
			'nomeform' => 'Nomeform',
			'long_desc' => 'Formulário',
			'data' => 'Data',
		);
	}
}