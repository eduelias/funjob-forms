<h2>AGRUPAMENTOS List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New AGRUPAMENTOS',array('create')); ?>]
[<?php echo CHtml::link('Manage AGRUPAMENTOS',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<?php echo CHtml::encode($model->getAttributeLabel('idagrupamento')); ?>:
<?php echo CHtml::link($model->idagrupamento,array('show','id'=>$model->idagrupamento)); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('titulo')); ?>:
<?php echo CHtml::encode($model->titulo); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('codagrupamento')); ?>:
<?php echo CHtml::encode($model->codagrupamento); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>