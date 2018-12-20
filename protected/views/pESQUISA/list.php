<h2>PESQUISA List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New PESQUISA',array('create')); ?>]
[<?php echo CHtml::link('Manage PESQUISA',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<?php echo CHtml::encode($model->getAttributeLabel('idpesquisa')); ?>:
<?php echo CHtml::link($model->idpesquisa,array('show','id'=>$model->idpesquisa)); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('data')); ?>:
<?php echo CHtml::encode($model->data); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>