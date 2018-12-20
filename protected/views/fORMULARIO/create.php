<h2>New FORMULARIO</h2>

<div class="actionBar">
[<?php echo CHtml::link('FORMULARIO List',array('list')); ?>]
[<?php echo CHtml::link('Manage FORMULARIO',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>