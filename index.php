<?php
// if ($_SERVER['HTTP_HOST']!='teste.coreos.com.br') { 
	// change the following paths if necessary
	$yii=dirname(__FILE__).'/../yii/1.0/framework/yii.php';
	$config=dirname(__FILE__).'/protected/config/main.php';
	
	// remove the following line when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG',($_SERVER['HTTP_HOST']=='teste.coreos.com.br'));
	require_once($yii);
	Yii::createWebApplication($config)->run();
/* } else {
?>
<body>
<center>
	<h1>! ATEN&Ccedil;&Atilde;O ! </h1>
	<p>Este sistema encontra-se dispon&iacute;vel em <a href='http://funjob.coreos.com.br'>http://funjob.coreos.com.br</a></p>
	<p>Por gentileza, entre em contato conosco pelo email: suporte_funjob@coreos.com.br</p>
</center>
</body>
<?php }*/ ?>