<link rel="stylesheet" href="lib/spry/widgets/radiovalidation/SpryValidationRadio.css">
<link rel="stylesheet" href="lib/spry/widgets/textfieldvalidation/SpryValidationTextField.css">
<script type="text/javascript" src="lib/spry/widgets/radiovalidation/SpryValidationRadio.js"></script>
<script type="text/javascript" src="lib/spry/widgets/textfieldvalidation/SpryValidationTextField.js"></script>
<style>
.radioRequiredState{
	background-color:#FF9999;
	border:thin solid #900;
} 
.radioValidState{
	background-color:#9F9;
	border:thin solid #090;
} 
</style>
<? if ($ed) { ?>
<script> 
	alert('Atenção: Este modo é apenas para inserir as partes dos formulários que não foram computadas antes');
</script>
<? } ?>
<h2><?php echo $model->long_desc; $i = 0; ?></h2>

<div class="actionBar">
  
</div>
<div class="jqtransform"><?php echo CHtml::beginForm(); ?>
<?php echo CHtml::errorSummary($mod); ?>
<table class="dataGrid">
<tr>
	<th class="label" width='5%'>
		<?php echo CHtml::encode('N# AUTOMATICO'); ?>
	</th>
    <td>
    	<?php echo (isset($model->lastform->idestatistica))?$model->lastform->idestatistica:$model->idformulario.'00'; ?>
	</td>
	<th class="label" width='5%'>
		<?php echo CHtml::encode('RESPOSTA N#'); ?>
	</th>
    <td width='20%' id='textfield'>
    	<input type='text' name='FORMID' id='textfield'>
		<script>
			var vtext = new Spry.Widget.ValidationTextField("textfield");
		</script>
	</td class='label'>
	<th width='10%' align='center'>
		SUGESTÃO:<br>#<?php echo (isset($model->lastform->codformulario))?$model->lastform->codformulario+1:$model->idformulario.'01'?>
	</th>
</tr>
	<?php $grps = $model->grupos;
		foreach ($grps as $a=>$grupo){
	?> 
		<tr><td colspan='5'>
			<h2><?php echo 'G'.STR_PAD($grupo->idagrupamento,3,'0',STR_PAD_LEFT).' - '.$grupo->titulo;?></h2>
			<table width=100%>
				<?php foreach ($grupo->perguntas as $g=>$perg){ ?> 
				<?php $radid = $model->idformulario.$grupo->idagrupamento.$perg->idpergunta; ?>
                <? 
					$edit = false;
					
					if ($ed == 1) {
						switch (true) {
							case ($model->idformulario != 13):{
								if ($i>198) $edit = true;
							}; break;
							case ($model->idformulario == 13):{
								if (($grupo->idagrupamento >= 211)&&($grupo->idagrupamento <= 214)) $edit = true;
							}; break;							
						}
					} else {
						$edit = true;
					}
				?>
					<? if ($edit) { ?><tr>
						<td>
							<? echo $g+1; ?>
						</td>
						<td>
							<? echo $perg->descricao; ?>
						</td>
						<td id='vradio<?=$radid?>' width='240px'>
							<div class="rowElem">
								<?php foreach($perg->repossiveis as $p=>$pr) { ?>
                                	
									<input type='radio' name='<?=$model->idformulario."|".$grupo->idagrupamento."|".$perg->idpergunta?>' value='<?=$pr->idresp_possivel?>'/>
									<label for='<?=$model->idformulario."|".$grupo->idagrupamento."|".$perg->idpergunta?>'>
										<? echo $pr->codigo; ?>
									</label>
                                    
									
								<? }?>
                                
					 		</div>
						</td>
					</tr>
					<script>
						var vradio<?=$radid?> = new Spry.Widget.ValidationRadio("vradio<?=$radid?>", {validateOn:["submit","change"]});
					</script> <? } ?><? $i++; ?>
				<? }; ?>
				
			</table>
		</td></tr>
	<?php
		}
	?>
</table>
<div class="action"> 
<?php echo CHtml::submitButton(isset($update) ? 'Inserir' : 'Inserir'); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div>
<script type="text/javascript">
//$(function() {
    //find all form with class jqtransform and apply the plugin
    //$("form").jqTransform();
//});
</script>