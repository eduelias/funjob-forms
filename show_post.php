<pre>
<?php
   print_r($_POST);
?>

<?
	foreach ($_POST as $indice => $valor){
		$ent = explode('|',$indice);
		$entrar[]= array('idforumario'=>$ent[0], 'idagrupamento'=> $ent[1], 'idpergunta'=>$ent[2], 'idresp_possivel'=>$valor);
	}
	print_r($entrar)	
?>
</pre>