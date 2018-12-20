<div style="padding:14px; border:solid #F90 1px; background-color:#FFC; font: Verdana;"><center><h1><em>Atenção!</em></h1></center> 
  <p align="justify">Foram feitas modificações no servidor para melhorar a utilização de memória e garantir que todas as informações sejam enviadas corretamente. Por isso, para gerar os arquivos em excel, é esperada uma certa demora de alguns minutos.</p>
  <p align="justify">Nos formulários 5, 6 e 9, parte das respostas não foram enviadas corretamente para o servidor e precisarão ser re-enviadas. Para enviar somente a parte que falta destes formulários, clique em &quot;&copy;&quot;, logo ao lado do número do formulário.</p>
  <p align="justify">No formulário 13, a quinta folha, enviada depois, j&aacute; encotnra-se disponível e pode ser acessada clicando-se no ícone &quot;&copy;&quot; ao lado do número do formulário</p>
</div>
<h2>LISTA DE FORMULARIOS</h2>

<div class="actionBar" style='display:none;'>
[<?php echo CHtml::link('novo FORMULARIO',array('create')); ?>]
[<?php echo CHtml::link('Gerir FORMULARIO',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<table width=100% border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td width=10% valign='middle' style='text-align:center;'>
			<h2><?php echo CHtml::link(STR_PAD($model->idformulario,2,'0',STR_PAD_LEFT),array('entrar','id'=>$model->idformulario)); ?>
            <? $idf = $model->idformulario; ?>
            <? if (($idf == 5)||($idf == 6)||($idf == 9)||($idf == 13)) {  ?> 
            	&nbsp;<?php echo CHtml::link('&copy;',array('entrar','id'=>$model->idformulario,'ed'=>true)); ?></h2>                
                <? }; ?>
		</td>
		<td> 
			<?php echo CHtml::encode($model->long_desc); ?>
			<br/>
			<?php echo CHtml::encode($model->getAttributeLabel('data')); ?>:
			<?php echo CHtml::encode($model->data); ?> 
            <table width=100% cellpadding=0 cellspacing=0 border=0>
            	<tr>
                	<th width='25%'>CONTAGEM:</th>
                    	<td width='25%'>
							<?php echo count($model->cont); ?>
                        </td>
                    <th width='25%'>ULTIMO:</th>
                    	<td width='25%'>
							<?php echo CHtml::encode((isset($model->lastform->codformulario))?$model->lastform->codformulario:'0'); ?>
                    	</td>
               	</tr>
            </table>
		</td>
		<td width=10% valign='middle'>
			<?php echo CHtml::link("<img src='images/xls.png' width='48px' border=no alt='Gerar XLS do form ".STR_PAD($model->idformulario,2,'0',STR_PAD_LEFT)."'>",array('eSTATISTICA/geraxls','id'=>$model->idformulario)); ?>
		</td>
	</tr>
</table>
</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>