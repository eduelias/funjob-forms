<div class="yiiForm">

<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'idpesquisa'); ?>
<?php echo CHtml::activeTextField($model,'idpesquisa'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'idformulario'); ?>
<?php echo CHtml::activeTextField($model,'idformulario'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'idagrupamento'); ?>
<?php echo CHtml::activeTextField($model,'idagrupamento'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'idpergunta'); ?>
<?php echo CHtml::activeTextField($model,'idpergunta'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'idresp_possivel'); ?>
<?php echo CHtml::activeTextField($model,'idresp_possivel'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'data'); ?>
<?php echo CHtml::activeTextField($model,'data'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'codformulario'); ?>
<?php echo CHtml::activeTextField($model,'codformulario'); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->