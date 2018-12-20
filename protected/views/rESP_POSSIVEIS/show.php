<h2>View RESP_POSSIVEIS <?php echo $model->idresp_possivel; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('RESP_POSSIVEIS List',array('list')); ?>]
[<?php echo CHtml::link('New RESP_POSSIVEIS',array('create')); ?>]
[<?php echo CHtml::link('Update RESP_POSSIVEIS',array('update','id'=>$model->idresp_possivel)); ?>]
[<?php echo CHtml::linkButton('Delete RESP_POSSIVEIS',array('submit'=>array('delete','id'=>$model->idresp_possivel),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage RESP_POSSIVEIS',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('descricao')); ?>
</th>
    <td><?php echo CHtml::encode($model->descricao); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('tipo')); ?>
</th>
    <td><?php echo CHtml::encode($model->tipo); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('codbarra')); ?>
</th>
    <td><?php echo CHtml::encode($model->codbarra); ?>
</td>
</tr>
</table>
