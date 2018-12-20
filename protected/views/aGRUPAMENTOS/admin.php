<h2>Managing AGRUPAMENTOS</h2>

<div class="actionBar">
[<?php echo CHtml::link('AGRUPAMENTOS List',array('list')); ?>]
[<?php echo CHtml::link('New AGRUPAMENTOS',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idagrupamento'); ?></th>
    <th><?php echo $sort->link('titulo'); ?></th>
    <th><?php echo $sort->link('codagrupamento'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idagrupamento,array('show','id'=>$model->idagrupamento)); ?></td>
    <td><?php echo CHtml::encode($model->titulo); ?></td>
    <td><?php echo CHtml::encode($model->codagrupamento); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idagrupamento)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idagrupamento),
      	  'confirm'=>"Are you sure to delete #{$model->idagrupamento}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>