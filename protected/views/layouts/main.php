<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<title><?php echo $this->pageTitle; ?></title>
</head>
<body>
<div id="page">
 
<div id="header"> 
<div id="mainmenu">
<?php $this->widget('application.components.MainMenu',array(
	'items'=>array(
		array('label'=>'Inserir', 'url'=>array('/fORMULARIO/list'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Editar', 'url'=>array('/eSTATISTICA/prepare'), 'visible'=>!Yii::app()->user->isGuest),
		#array('label'=>'Gerar XLS', 'url'=>array('/fORMULARIO/list')),
		#array('label'=>'Contact', 'url'=>array('/site/contact')),
		array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'Sair', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
	),
)); ?>
</div><!-- mainmenu -->
</div><!-- header -->

<div id="content">
<?php echo $content; ?>
</div><!-- content -->

<div id="footer">
Copyright &copy; <?php //echo gmdate('Y');?> por Core Soluções LTDA-ME.<br/>
Todos os direitos reservados.<br/>
<?php echo Yii::powered(); ?><br />
<?php echo (YII_DEBUG)?'Mem usada: '.memory_get_usage(true):''; ?>

</div><!-- footer -->

</div><!-- page -->
</body>

</html>
