<h2>PERGUNTAS List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New PERGUNTAS',array('create')); ?>]
[<?php echo CHtml::link('Manage PERGUNTAS',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<?php echo CHtml::encode($model->getAttributeLabel('idpergunta')); ?>:
<?php echo CHtml::link($model->idpergunta,array('show','id'=>$model->idpergunta)); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('descricao')); ?>:
<?php echo CHtml::encode($model->descricao); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>