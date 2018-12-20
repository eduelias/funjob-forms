<h2>EDIÇÃO DE REGISTROS</h2>
<?php $primeiro = true; $formantigo = false; //não exibir fim de linha no primeiro item?>

<table width=100% cellpadding=7 cellspacing=0>
<?php foreach($models as $n=>$model): ?>
<?php if ($formantigo != $model->idformulario) { ?>
  <?php if (!$primeiro) { ?></tr></td><?php $primeiro = false; } ?>
  <tr style="background-color: rgb(<?php echo (100+$n*10).','.(100+$n*10).','.(230); ?>)"><td><b><?=$model->formulario->long_desc?></b></td></tr>
    <tr style="background-color: rgb(<?php echo (120+$n*10).','.(120+$n*10).','.(250); ?>"><td>
    <?php echo CHtml::link($model->codformulario,array('subadmin','id'=>$model->codformulario));?>
    <?php $formantigo = $model->idformulario; ?>
<?php } else { ?>
	<?php echo CHtml::link($model->codformulario,array('subadmin','id'=>$model->codformulario));?>
<?php } ?>
<?php endforeach; ?> 
</table>