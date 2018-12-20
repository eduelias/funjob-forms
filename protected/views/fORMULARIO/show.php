<h2>View FORMULARIO <?php echo $model->idformulario; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('FORMULARIO List',array('list')); ?>]
[<?php echo CHtml::link('New FORMULARIO',array('create')); ?>]
[<?php echo CHtml::link('Update FORMULARIO',array('update','id'=>$model->idformulario)); ?>]
[<?php echo CHtml::linkButton('Delete FORMULARIO',array('submit'=>array('delete','id'=>$model->idformulario),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage FORMULARIO',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('nomeform')); ?>
</th>
    <td><?php echo CHtml::encode($model->nomeform); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('data')); ?>
</th>
    <td><?php echo CHtml::encode($model->data); ?>
</td>
</tr>
</table>
