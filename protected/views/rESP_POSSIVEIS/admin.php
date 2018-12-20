<h2>Managing RESP_POSSIVEIS</h2>

<div class="actionBar">
[<?php echo CHtml::link('RESP_POSSIVEIS List',array('list')); ?>]
[<?php echo CHtml::link('New RESP_POSSIVEIS',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idresp_possivel'); ?></th>
    <th><?php echo $sort->link('descricao'); ?></th>
    <th><?php echo $sort->link('tipo'); ?></th>
    <th><?php echo $sort->link('codbarra'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idresp_possivel,array('show','id'=>$model->idresp_possivel)); ?></td>
    <td><?php echo CHtml::encode($model->descricao); ?></td>
    <td><?php echo CHtml::encode($model->tipo); ?></td>
    <td><?php echo CHtml::encode($model->codbarra); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idresp_possivel)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idresp_possivel),
      	  'confirm'=>"Are you sure to delete #{$model->idresp_possivel}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>