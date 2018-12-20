<h2>New PERGUNTAS</h2>

<div class="actionBar">
[<?php echo CHtml::link('PERGUNTAS List',array('list')); ?>]
[<?php echo CHtml::link('Manage PERGUNTAS',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>