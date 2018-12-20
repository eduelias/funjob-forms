<h2>RESP_POSSIVEIS List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New RESP_POSSIVEIS',array('create')); ?>]
[<?php echo CHtml::link('Manage RESP_POSSIVEIS',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<?php echo CHtml::encode($model->getAttributeLabel('idresp_possivel')); ?>:
<?php echo CHtml::link($model->idresp_possivel,array('show','id'=>$model->idresp_possivel)); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('descricao')); ?>:
<?php echo CHtml::encode($model->descricao); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('tipo')); ?>:
<?php echo CHtml::encode($model->tipo); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('codbarra')); ?>:
<?php echo CHtml::encode($model->codbarra); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>