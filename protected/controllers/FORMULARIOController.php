<?php

class FORMULARIOController extends CController
{
	const PAGE_SIZE=10;

	/**
	 * @var string specifies the default action to be 'list'.
	 */
	public $defaultAction='list';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'list' and 'show' actions
				'actions'=>array('list','show'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','entrar','gera_xls'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Shows a particular model.
	 */
	public function actionShow()
	{
		$this->render('show',array('model'=>$this->loadFORMULARIO()));
	}
	
	public function gera_xls()
	{
		
	}
	
	/**
	 * Mostra o formulario construido para entrada de estatísticas.
	 */
//	public function actionEntrar()
//	{
//		$this->render('entrar',array('model'=>$this->loadFORMULARIO()));
//	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'show' page.
	 */
	public function actionCreate()
	{ 
		$model=new FORMULARIO;
		if(isset($_POST['FORMULARIO']))
		{
			$model->attributes=$_POST['FORMULARIO'];
			if($model->save())
				$this->redirect(array('show','id'=>$model->idformulario));
		}
		$this->render('create',array('model'=>$model));
	}
	 
	public function actionEntrar()
	{
		if (!isset($mod)) {$mod = new ESTATISTICA; };
		foreach ($_POST as $indice => $valor){
			if (($indice != 'yt0')&&($indice!='FORMID')){
				$ent = explode('|',$indice);
				$aux = array('idforumario'=>$ent[0], 'idagrupamento'=> $ent[1], 'idpergunta'=>$ent[2], 'idresp_possivel'=>$valor);
				$mod = new ESTATISTICA;
				$mod->idformulario = $ent[0];
				$mod->idagrupamento = $ent[1];
				$mod->idpergunta = $ent[2];
				$mod->codformulario = $_POST['FORMID'];
				$mod->idresp_possivel = $valor;
				$mod->save();
			}
			 
		}
		$ed = (isset($_GET['ed']))?1:0;
		$this->render('entrar',array('model'=>$this->loadFORMULARIO(),'mod'=>$mod,'ed'=>$ed));
	}
   
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'show' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadFORMULARIO();
		if(isset($_POST['FORMULARIO']))
		{
			$model->attributes=$_POST['FORMULARIO'];
			if($model->save())
				$this->redirect(array('show','id'=>$model->idformulario));
		}
		$this->render('update',array('model'=>$model));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'list' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadFORMULARIO()->delete();
			$this->redirect(array('list'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionList()
	{
		$criteria=new CDbCriteria;

		$pages=new CPagination(FORMULARIO::model()->count($criteria));
		$pages->pageSize=self::PAGE_SIZE;
		$pages->applyLimit($criteria);

		$models=FORMULARIO::model()->findAll($criteria);

		$this->render('list',array(
			'models'=>$models,
			'pages'=>$pages,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->processAdminCommand();

		$criteria=new CDbCriteria;

		$pages=new CPagination(FORMULARIO::model()->count($criteria));
		$pages->pageSize=self::PAGE_SIZE;
		$pages->applyLimit($criteria);

		$sort=new CSort('FORMULARIO');
		$sort->applyOrder($criteria);

		$models=FORMULARIO::model()->findAll($criteria);

		$this->render('admin',array(
			'models'=>$models,
			'pages'=>$pages,
			'sort'=>$sort,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
	 */
	public function loadFORMULARIO($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null || isset($_GET['id']))
				$this->_model=FORMULARIO::model()->findbyPk($id!==null ? $id : $_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
	 */
	public function loadFaultFORMULARIO($id=null)
	{
/*		if($this->_model===null)
		{
			if($id!==null || isset($_GET['id']))
				$criteria = new CDbCriteria;
				$this->_model=FORMULARIO::model()->findbyPk($id!==null ? $id : $_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'Nada encontrado.');
		}
		return $this->_model;*/
	}

	/**
	 * Executes any command triggered on the admin page.
	 */
	protected function processAdminCommand()
	{
		if(isset($_POST['command'], $_POST['id']) && $_POST['command']==='delete')
		{
			$this->loadFORMULARIO($_POST['id'])->delete();
			// reload the current page to avoid duplicated delete actions
			$this->refresh();
		}
	}
}
