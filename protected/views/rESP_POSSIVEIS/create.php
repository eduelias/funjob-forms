<h2>New RESP_POSSIVEIS</h2>

<div class="actionBar">
[<?php echo CHtml::link('RESP_POSSIVEIS List',array('list')); ?>]
[<?php echo CHtml::link('Manage RESP_POSSIVEIS',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>