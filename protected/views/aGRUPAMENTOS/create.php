<h2>New AGRUPAMENTOS</h2>

<div class="actionBar">
[<?php echo CHtml::link('AGRUPAMENTOS List',array('list')); ?>]
[<?php echo CHtml::link('Manage AGRUPAMENTOS',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>