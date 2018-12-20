<h2>Alterar entrada #<?=$_GET[id]?></h2>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('idagrupamento'); ?></th>
    <th><?php echo $sort->link('idpergunta'); ?></th>
    <th><?php echo $sort->link('idresp_possivel'); ?></th>
    
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::encode('G'.STR_PAD($model->idagrupamento,3,'0',STR_PAD_LEFT)); ?></td>
	
    <td><?php echo CHtml::encode($model->pergunta->descricao); ?></td>
    <td><?php echo CHtml::encode($model->resposta->descricao); ?></td>
    
    <td>
      <?php echo CHtml::link('Editar',array('update','id'=>$model->idestatistica)); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>