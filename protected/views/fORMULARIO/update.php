<h2>Update FORMULARIO <?php echo $model->idformulario; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('FORMULARIO List',array('list')); ?>]
[<?php echo CHtml::link('New FORMULARIO',array('create')); ?>]
[<?php echo CHtml::link('Manage FORMULARIO',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>true,
)); ?>