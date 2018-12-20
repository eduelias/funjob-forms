<h2>Update PESQUISA <?php echo $model->idpesquisa; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('PESQUISA List',array('list')); ?>]
[<?php echo CHtml::link('New PESQUISA',array('create')); ?>]
[<?php echo CHtml::link('Manage PESQUISA',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>true,
)); ?>