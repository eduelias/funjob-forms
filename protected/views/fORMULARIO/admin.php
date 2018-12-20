<h2>Managing FORMULARIO</h2>

<div class="actionBar">
[<?php echo CHtml::link('FORMULARIO List',array('list')); ?>]
[<?php echo CHtml::link('New FORMULARIO',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idformulario'); ?></th>
    <th><?php echo $sort->link('nomeform'); ?></th>
    <th><?php echo $sort->link('data'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idformulario,array('show','id'=>$model->idformulario)); ?></td>
    <td><?php echo CHtml::encode($model->nomeform); ?></td>
    <td><?php echo CHtml::encode($model->data); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idformulario)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idformulario),
      	  'confirm'=>"Are you sure to delete #{$model->idformulario}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>