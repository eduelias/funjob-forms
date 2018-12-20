<div class="yiiForm">

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
	<h1><?php echo $model->agrupamento->titulo; ?></h1>
	
	<?php $criteria = new CDbCriteria; $criteria->condition = 'idpergunta = '.$model->pergunta->idpergunta.' and idagrupamento = '.$model->agrupamento->idagrupamento; ?>
	
	<?php echo CHtml::encode(rel_agrup_perg::model()->find($criteria)->ordem.'-'.$model->pergunta->descricao); ?>	
</div>

<div class="simple">
<?php echo 'Entre com a nova resposta:' ?>
<?php echo CHtml::activeDropDownList($model,'idresp_possivel',CHtml::listData(PERGUNTAS::model()->findbyPk($model->idpergunta)->repossiveis, 'idresp_possivel', 'descricao'), array('empty'=>'Escolha um estado'));?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->