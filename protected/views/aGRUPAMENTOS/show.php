<h2>View AGRUPAMENTOS <?php echo $model->idagrupamento; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('AGRUPAMENTOS List',array('list')); ?>]
[<?php echo CHtml::link('New AGRUPAMENTOS',array('create')); ?>]
[<?php echo CHtml::link('Update AGRUPAMENTOS',array('update','id'=>$model->idagrupamento)); ?>]
[<?php echo CHtml::linkButton('Delete AGRUPAMENTOS',array('submit'=>array('delete','id'=>$model->idagrupamento),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage AGRUPAMENTOS',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('titulo')); ?>
</th>
    <td><?php echo CHtml::encode($model->titulo); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('codagrupamento')); ?>
</th>
    <td><?php echo CHtml::encode($model->codagrupamento); ?>
</td>
</tr>
</table>
