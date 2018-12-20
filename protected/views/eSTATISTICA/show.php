<h2>View ESTATISTICA <?php echo $model->idestatistica; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('ESTATISTICA List',array('list')); ?>]
[<?php echo CHtml::link('New ESTATISTICA',array('create')); ?>]
[<?php echo CHtml::link('Update ESTATISTICA',array('update','id'=>$model->idestatistica)); ?>]
[<?php echo CHtml::linkButton('Delete ESTATISTICA',array('submit'=>array('delete','id'=>$model->idestatistica),'confirm'=>'Are you sure?')); ?>
]
[<?php echo CHtml::link('Manage ESTATISTICA',array('admin')); ?>]
</div>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('idpesquisa')); ?>
</th>
    <td><?php echo CHtml::encode($model->idpesquisa); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('idformulario')); ?>
</th>
    <td><?php echo CHtml::encode($model->idformulario); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('idagrupamento')); ?>
</th>
    <td><?php echo CHtml::encode($model->idagrupamento); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('idpergunta')); ?>
</th>
    <td><?php echo CHtml::encode($model->idpergunta); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('idresp_possivel')); ?>
</th>
    <td><?php echo CHtml::encode($model->idresp_possivel); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('data')); ?>
</th>
    <td><?php echo CHtml::encode($model->data); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('codformulario')); ?>
</th>
    <td><?php echo CHtml::encode($model->codformulario); ?>
</td>
</tr>
</table>
