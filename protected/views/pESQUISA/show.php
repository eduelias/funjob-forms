<h2>View PESQUISA <?php echo $model->idpesquisa; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('PESQUISA List',array('list')); ?>]
[<?php echo CHtml::link('New PESQUISA',array('create')); ?>]
[<?php echo CHtml::link('Update PESQUISA',array('update','id'=>$model->idpesquisa)); ?>]
[<?php echo CHtml::linkButton('Delete PESQUISA',array('submit'=>array('delete','id'=>$model->idpesquisa),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage PESQUISA',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('data')); ?>
</th>
    <td><?php echo CHtml::encode($model->data); ?>
</td>
</tr>
</table>
