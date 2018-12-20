<h2>LISTA DE FORMULARIOS</h2>

<div class="actionBar" style='display:none;'>
[<?php echo CHtml::link('New FORMULARIO',array('create')); ?>]
[<?php echo CHtml::link('Manage FORMULARIO',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>
 
<?php foreach($models as $n=>$model): ?>
<div class="item">
<table width=100% border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td width=10% valign='middle' style='text-align:center;'>
			<h1><?php echo CHtml::link(STR_PAD($model->idformulario,2,'0',STR_PAD_LEFT),array('entrar','id'=>$model->idformulario)); ?></h1>
		</td>
		<td> 
			<?php echo CHtml::encode($model->long_desc); ?>
			<br/>
			<?php echo CHtml::encode($model->getAttributeLabel('data')); ?>:
			<?php echo CHtml::encode($model->data); ?> 
			<table width=100% cellpadding=0 cellspacing=0 border=0><tr><th width='25%'>CONTAGEM:</th><td width='25%'><?php echo count($model->count); ?></td><th width='25%'>ULTIMO:</th><td width='25%'><?php echo CHtml::encode(($model->lastform->codformulario)?$model->lastform->codformulario:'0'); ?></td></tr></table>
		</td>
		<td width=10% valign='middle'>
			<?php echo CHtml::link("<img src='images/xls.png' width='48px' border=no alt='Gerar XLS do form ".STR_PAD($model->idformulario,2,'0',STR_PAD_LEFT)."'>",array('eSTATISTICA/geraxls','id'=>$model->idformulario)); ?>
		</td>
	</tr>
</table>
</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>