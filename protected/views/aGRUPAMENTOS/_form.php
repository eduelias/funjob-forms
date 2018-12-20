<div class="yiiForm">

<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'titulo'); ?>
<?php echo CHtml::activeTextField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'codagrupamento'); ?>
<?php echo CHtml::activeTextField($model,'codagrupamento',array('size'=>45,'maxlength'=>45)); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->