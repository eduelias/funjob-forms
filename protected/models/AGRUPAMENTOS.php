<?php

class AGRUPAMENTOS extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'AGRUPAMENTOS':
	 * @var integer $idagrupamento
	 * @var string $titulo
	 * @var string $codagrupamento
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
		return 'AGRUPAMENTOS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('titulo','length','max'=>45),
			array('codagrupamento','length','max'=>45),
			array('idagrupamento', 'required'),
			array('idagrupamento', 'numerical', 'integerOnly'=>true),
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
			'estat' => array(self::HAS_MANY, 'Estatistica', 'idagrupamento'),
			'perguntas' => array(self::MANY_MANY, 'PERGUNTAS', 'rel_agrup_perg(idagrupamento,idpergunta)','select'=>'*','order'=>'ordem ASC'),
			'formularios' => array(self::MANY_MANY, 'Formulario', 'rel_form_agrup(idformulario, idagrupamento)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idagrupamento' => 'Idagrupamento',
			'titulo' => 'Titulo',
			'codagrupamento' => 'Codagrupamento',
		);
	}
}