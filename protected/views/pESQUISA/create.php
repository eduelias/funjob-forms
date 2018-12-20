<h2>New PESQUISA</h2>

<div class="actionBar">
[<?php echo CHtml::link('PESQUISA List',array('list')); ?>]
[<?php echo CHtml::link('Manage PESQUISA',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>false,
)); ?>