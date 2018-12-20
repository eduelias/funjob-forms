<div class="yiiForm">

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
	<b>Agrupamento: </b><?php echo 'G'.STR_PAD($model->idagrupamento,3,'0',STR_PAD_LEFT).' - '.$model->agrupamento->titulo; ?><br>
</div>
<div class="simple">
	<?php $criteria = new CDbCriteria; $criteria->condition = 'idpergunta = '.$model->pergunta->idpergunta.' and idagrupamento = '.$model->agrupamento->idagrupamento; ?>
	<b>Pergunta:</b> <?php echo CHtml::encode(rel_agrup_perg::model()->find($criteria)->ordem.'-'.$model->pergunta->descricao); ?><br>	
</div>
<div class="simple">
<?php echo 'Entre com a nova resposta: ' ?>
<?php echo CHtml::activeDropDownList($model,'idresp_possivel',CHtml::listData(PERGUNTAS::model()->findbyPk($model->idpergunta)->repossiveis, 'idresp_possivel', 'descricao'));?>
</div>
<div class="action">
<?php echo CHtml::submitButton($update ? 'Salvar' : 'Create'); ?>
</div>
<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->