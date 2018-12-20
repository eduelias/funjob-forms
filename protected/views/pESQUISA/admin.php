<h2>Managing PESQUISA</h2>

<div class="actionBar">
[<?php echo CHtml::link('PESQUISA List',array('list')); ?>]
[<?php echo CHtml::link('New PESQUISA',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idpesquisa'); ?></th>
    <th><?php echo $sort->link('data'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idpesquisa,array('show','id'=>$model->idpesquisa)); ?></td>
    <td><?php echo CHtml::encode($model->data); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idpesquisa)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idpesquisa),
      	  'confirm'=>"Are you sure to delete #{$model->idpesquisa}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>