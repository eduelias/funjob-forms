<div class="yiiForm">

<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'descricao'); ?>
<?php echo CHtml::activeTextField($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'tipo'); ?>
<?php echo CHtml::activeTextField($model,'tipo',array('size'=>60,'maxlength'=>100)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'codbarra'); ?>
<?php echo CHtml::activeTextField($model,'codbarra',array('size'=>45,'maxlength'=>45)); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->