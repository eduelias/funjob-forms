<?php
header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT");
header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
header ( "Pragma: no-cache" );
header ( "Content-type: application/octet-stream; name=formulario".STR_PAD($_GET['id'],2,'0',STR_PAD_LEFT).".xls");
header ( "Content-Disposition: attachment; filename=FRM".STR_PAD($_GET['id'],2,'0',STR_PAD_LEFT).'_'.gmdate("dmyHi").".xls");
header ( "Content-Description: CORE Gera excel" );
?> 
<? foreach ($models as $m=>$model): ?>
<? $grupos = $model->grupos; ?>
<? $i = 0; ?>
<table border="1">
    <thead>
    	<td>CODF</td>
<? foreach($grupos as $h=>$grupo): ?>
	<? $pergs = $grupo->perguntas; ?>
    <? foreach($pergs as $n=>$perg): ?>
    	<td><?='G'.$grupo->idagrupamento.'Q'.$perg->idpergunta?></td>
    <? endforeach ?>
<? endforeach; ?>
	</thead>
    <tbody>
<? foreach($estats as $e=>$estat): ?>
	   	<tr>
        	<td><?=$estat['codformulario']?></td>
	<? foreach($grupos as $g=>$grupo):?>
    	<? foreach($grupo->perguntas as $p=>$perg):?>
    		<td>
            <? 
				$command = Yii::app()->db->createCommand('Select idresp_possivel from ESTATISTICA where codformulario = '.$estat['codformulario'].' AND idagrupamento ='.$grupo->idagrupamento.' AND idpergunta ='.$perg->idpergunta);	
		
				$raw = $command->queryAll();
				
				if (isset($raw[0])) {
						print_r($raw[0]['idresp_possivel']);
				} else {
						echo '&nbsp;';
				}
				
				unset($command);
				unset($raw);
				unset($crit);
				flush();
			?>
            </td>
    	<? endforeach;?>
    <? endforeach;?>
        
        </tr>
<? endforeach; ?>
    </tbody>
</table>
<? endforeach; ?>