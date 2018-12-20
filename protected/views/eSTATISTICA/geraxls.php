<?php
header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
header ( "Pragma: no-cache" );
header ( "Content-type: application/octet-stream; name=aaa.xls");
header ( "Content-Disposition: attachment; filename=aaa.xls"); 
header ( "Content-Description: MID Gera excel" );
?>
<table class="dataGrid">
	<thead>
		<?php $first = true; ?>

<?php foreach($models as $n=>$model): ?>
  	<?php if ($old != $model->codformulario) { ?>
				<?php if(!$first) break; ?>
				<?php $first = false; ?>
				<?php $old = $model->codformulario; ?>
				<td><?php echo CHtml::encode('N# FORM'); ?></td>
				<td><?php echo CHtml::encode('ID FORM'); ?></td>
				<td><?php echo CHtml::encode('G'.STR_PAD($model->agrupamento->idagrupamento,2,'0',STR_PAD_LEFT).'Q'.STR_PAD($model->pergunta->idpergunta,2,'0',STR_PAD_LEFT)); ?></td>
	<? } else {	?>
		<?php $old = $model->codformulario; ?>
    	<td><?php echo CHtml::encode('G'.STR_PAD($model->agrupamento->idagrupamento,3,'0',STR_PAD_LEFT).'Q'.STR_PAD($model->pergunta->idpergunta,2,'0',STR_PAD_LEFT)); ?></td>
<?php  };?>  
<?php endforeach; ?>
	</thead>
<?php $first = true; $old = 0; $count = 1; ?>
<tbody>
<?php foreach($models as $m=>$model): ?>
  	<?php if ($old != $model->codformulario) { ?>
			<?php if(!$first) echo "</tr>"; ?>
			<?php $first = false; ?>
			<?php $count++; ?>
			<tr class="<?php echo $count%2?'even':'odd';?>">
				<?php $old = $model->codformulario; ?>
				<td><?php echo CHtml::encode($model->codformulario); ?></td>
				<td><?php echo CHtml::encode($model->idformulario); ?></td>
				<td><?php echo CHtml::encode($model->resposta->idresp_possivel); ?></td> 
	<? } else {	?>
		<?php $old = $model->codformulario; ?>
    	<td><?php echo CHtml::encode($model->resposta->idresp_possivel); ?></td> 
  <?php  }; //endelse ?>  

<?php endforeach; ?></tr>

 </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>