<h1>ESCOLHA QUAL ENTRADA DEVE SER EDITADA</h1>
<?php foreach($models as $n=>$model): ?>
<?php if ($formantigo != $model->idformulario) echo '</p><p>'; ?>
<?php $formantigo = $model->idformulario; ?>
<?php echo CHtml::link($model->codformulario,array('subadmin','id'=>$model->codformulario)); ?> 
<?php endforeach; ?>
