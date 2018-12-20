<h2>View PERGUNTAS <?php echo $model->idpergunta; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('PERGUNTAS List',array('list')); ?>]
[<?php echo CHtml::link('New PERGUNTAS',array('create')); ?>]
[<?php echo CHtml::link('Update PERGUNTAS',array('update','id'=>$model->idpergunta)); ?>]
[<?php echo CHtml::linkButton('Delete PERGUNTAS',array('submit'=>array('delete','id'=>$model->idpergunta),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage PERGUNTAS',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('descricao')); ?>
</th>
    <td><?php echo CHtml::encode($model->descricao); ?>
</td>
</tr>
</table>
