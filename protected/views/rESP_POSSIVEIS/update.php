<h2>Update RESP_POSSIVEIS <?php echo $model->idresp_possivel; ?></h2>

<div class="actionBar">
[<?php echo CHtml::link('RESP_POSSIVEIS List',array('list')); ?>]
[<?php echo CHtml::link('New RESP_POSSIVEIS',array('create')); ?>]
[<?php echo CHtml::link('Manage RESP_POSSIVEIS',array('admin')); ?>]
</div>

<?php echo $this->renderPartial('_form', array(
	'model'=>$model,
	'update'=>true,
)); ?>