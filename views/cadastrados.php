<form action="" method="POST" role="form" class="hidden-print">
	<div class="form-group">
		<select name="id_oficina" id="input" class="form-control" required="required">
			<option value="" disabled selected>Selecione a Oficina...</option>
			<?php foreach ($info_oficina as $ioficina):?>
			<option value="<?=$ioficina['id']?>"><?=utf8_encode($ioficina['nome'])?></option>
			<?php endforeach ?>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Buscar</button>
</form>


<h4 align="center"><?=utf8_encode($oficina['nome'])?></h4>
<div style="padding-bottom: 15px">
	<table class="table table-hover table-striped table-bordered">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Cargo / Função</th>
				<th>Secretaria</th>
				<th>Celular</th>
				<th>Possui Transporte?</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($info_participante as $info):?>
			<tr>
				<td><?=utf8_encode($info['nome'])?></td>
				<td><?=$info['cpf']?></td>
				<td><?=utf8_encode($info['cargo'])?></td>
				<td><?=utf8_encode($info['setor'])?></td>
				<td><?=$info['celular']?></td>
				<td><?=utf8_encode($info['transporte'])?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="hidden-print row">
	<div class="col-md d-flex justify-content-end">
        <a href="#" onclick="window.print()" class="btn btn-warning fas fa-print">Imprimir</a>
    </div>
</div>
