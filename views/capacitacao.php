<h4 align="center">Secretaria Municipal de Administração</h4>
<form action="" method="POST" role="form">
	<legend>Participantes</legend>

	<div class="row form-group">
		<div class="col-md">
			<label>Nome</label>
			<input type="text" class="form-control" id="" placeholder="Nome completo" name="nome" required="required">
		</div>
		<div class="col-md">
			<label>CPF</label>
			<input type="text" name="cpf" class="form-control" readonly value="<?=$_SESSION['CPF']?>">
		</div>
	</div>
	<div class="row form-group">
			<div class="col-md">
				<label>Endereço:</label>
				<input type="text" name="endereco" class="form-control" required="required">
			</div>
			<div class="col-md">
				<label>Bairro:</label>
				<input type="text" name="bairro" class="form-control" required="required">
			</div>
			<div class="col-md">
				<label>Celular</label>
				<input type="text" name="celular" class="form-control" required="required">
			</div>
	</div>

	<div class="row form-group">
		<div class="col-md">
			<label>Oficinas</label>
			<select name="oficina" id="inputOficina" class="form-control" required="required">
				<option value="" disabled selected>Selecione a oficina</option>
				<?php foreach ($info_oficina as $info_of):?>
				<?php if($info_of['qnt_vagas'] > $info_of['vagas_preenchidas']): ?>
				<option value="<?=$info_of['id']?>"><?=utf8_encode($info_of['nome'])?></option>
				<?php endif ?>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="col-md">
			<label>Cargo / Função</label>
			<input type="text" name="cargo" class="form-control" placeholder="Cargo / Função" required>
		</div>
		<div class="col-md">
			<label>Secretaria</label>
			<input type="text" name="setor" class="form-control" placeholder="Secretarias" required>
		</div>
		<div class="col-md">
			<label>Possui transporte para o evento?</label>
			<select name="transporte" id="inputTransporte" class="form-control" required="required">
				<option value="" disabled selected>Selecione...</option>
				<option value="Não">Não</option>
				<option value="Sim">Sim</option>
			</select>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md d-flex justify-content-end">
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</div>
	</div>
</form>