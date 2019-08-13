<?php

/**
 * 
 */
class homeController extends controller
{
	
	public function index()
	{
		
		$participante = new modelParticipante();

		$dados = array
		(
				'info_oficina' => $participante->listaOficinasSUM(), 
		);

		$this->loadTemplate('home', $dados);
		if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
			$cpf = $_POST['cpf'];
			$info = $participante->listar($cpf);
			$todas = 0;	
			if (empty($info)) {
				$doficinas = $participante->listaOficinas();
				foreach ($doficinas as $ioficinas) {
					if ($ioficinas['qnt_vagas'] > $ioficinas['vagas_preenchidas']) {
						$_SESSION['CPF'] = $cpf;
						header("Location:".BASE_URL.'home/capacitacao');
					}else{
						$todas = 1;
					}
				}
				if ($todas == 1 ) {
					echo "	<div class='alert alert-warning alert-dismissible fade show' role='alert' align='center'>
  							<strong>Todas as vagas já estão preenchidas.</strong>
  							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
  							</button>
						</div>";
				}
			}else{
				echo "	<div class='alert alert-warning alert-dismissible fade show' role='alert' align='center'>
  							<strong>Participante já se cadastrou para uma vaga.</strong>
  							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
  							</button>
						</div>";
			}
		}

	}

	public function capacitacao()
	{
		if (isset($_SESSION['CPF']) && !empty($_SESSION['CPF'])) {
			$oficinas = new modelParticipante();
			
			if (isset($_POST['oficina']) && !empty($_POST['oficina'])) {
				$nome 		= addslashes(utf8_decode($_POST['nome']));
				$cpf 		= $_POST['cpf'];
				$endereco	= addslashes(utf8_decode($_POST['endereco']));
				$bairro 	= addslashes(utf8_decode($_POST['bairro']));
				$celular 	= $_POST['celular'];
				$oficina 	= addslashes(utf8_decode($_POST['oficina']));
				$cargo		= addslashes(utf8_decode($_POST['cargo']));
				$setor 		= addslashes(utf8_decode($_POST['setor']));
				$transporte	= addslashes(utf8_decode($_POST['transporte']));
				$oficinas ->cadastrar($nome, $cpf, $endereco, $bairro, $celular, $oficina, $cargo, $setor, $transporte);
				header("Location:".BASE_URL."home/sucesso/".$cpf);
			}

			$dados = array
			(
				'info_oficina' => $oficinas->listaOficinas(), 
			);

			$this->loadTemplate('capacitacao', $dados);
			
		}else{
			header("Location:".BASE_URL);
		}
	}

	public function sair()
	{
		session_destroy();
		header("Location:".BASE_URL);
	}

	public function sucesso($cpf)
	{
			$participante = new modelParticipante();

			$dados = array
			(
				'info_participante' => $participante->listar($cpf),
				'info_oficinas'		=> $participante->listaOficinas(), 
			);

			$this->loadTemplate('sucesso', $dados);
	}

	public function cadastrados()
	{
		$iparticipantes = new modelParticipante();
		$id_oficina = 1;

		if (isset($_POST['id_oficina']) && !empty($_POST['id_oficina'])) {
		$id_oficina = $_POST['id_oficina'];
		}
		$dados = array
		(
			'info_participante' => $iparticipantes->listarParticipantes($id_oficina),
			'info_oficina' 		=> $iparticipantes->listaOficinas(),
			'oficina'			=> $iparticipantes->listaOficinasID($id_oficina),
			'id_oficina' 		=> $id_oficina,  
		);

		$this->loadTemplate('cadastrados', $dados);
	}


}