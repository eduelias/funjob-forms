<h2>New ESTATISTICA</h2>

<div class="actionBar">
[<?php echo CHtml::link('ESTATISTICA List',array('list')); ?>]
[<?php echo CHtml::link('Manage ESTATISTICA',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>