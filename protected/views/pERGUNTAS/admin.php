<h2>Managing PERGUNTAS</h2>

<div class="actionBar">
[<?php echo CHtml::link('PERGUNTAS List',array('list')); ?>]
[<?php echo CHtml::link('New PERGUNTAS',array('create')); ?>]
</div>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idpergunta'); ?></th>
    <th><?php echo $sort->link('descricao'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->idpergunta,array('show','id'=>$model->idpergunta)); ?></td>
    <td><?php echo CHtml::encode($model->descricao); ?></td>
    <td>
      <?php echo CHtml::link('Update',array('update','id'=>$model->idpergunta)); ?>
      <?php echo CHtml::linkButton('Delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->idpergunta),
      	  'confirm'=>"Are you sure to delete #{$model->idpergunta}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>