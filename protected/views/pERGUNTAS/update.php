<h2>Update PERGUNTAS <?php echo $model->idpergunta; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('PERGUNTAS List',array('list')); ?>]
[<?php echo CHtml::link('New PERGUNTAS',array('create')); ?>]
[<?php echo CHtml::link('Manage PERGUNTAS',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>true,
)); ?>