<div class="row" style="padding-bottom: 30px;">
	<div class="col-md d-flex justify-content-center"><img src="<?=BASE_URL?>assets/images/pmto.png" class="img-responsive" class="img-thumbnail" height="120px"></div>
</div>
<div class="row form-group">
	<div class="col-md"><h4>Nome: <?=$info_participante['nome']?></h4></div>
</div>

<div class="row form-group">
	<div class="col-md">
		<h4>CPF: <?=$info_participante['cpf']?></h4>		
	</div>
</div>
<div class="row form-group">
	<div class="col-md">
		<h4>Cargo / Função: <?=$info_participante['cargo']?></h4> 
	</div>
</div>
<div class="row form-group">
	<div class="col-md">
		<h4>Secretaria: <?=$info_participante['setor']?></h4> 
	</div>
</div>
	
<div class="row form-group">
	<div class="col-md">
		<h4>Oficina:
			<?php foreach ($info_oficinas as $oficinas) {
					if ($oficinas['id'] == $info_participante['id_oficina']) {
						echo utf8_encode($oficinas['nome']);
					}
			} ?>
		</h4>
	</div>
</div>

<div class="row form-group">
	<div class="col-md">
		<h4>Possui transporte para o evento? <?=utf8_encode($info_participante['transporte'])?></h4> 
	</div>
</div>
 <div class="hidden-print row">
 	<div class="col-md d-flex justify-content-start">
 		<a href="<?=BASE_URL?>home/sair" class="btn btn-danger fas fa-print">Sair</a> 
 	</div>
    <div class="col-md d-flex justify-content-end">
 		<a href="#" onclick="window.print()" class="btn btn-warning fas fa-print">Imprimir</a>  
 	</div>
</div>