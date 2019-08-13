<?php  
/**
 * 
 */
class modelParticipante extends model
{
	
	public function listar($cpf)
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_participante WHERE cpf = :cpf");
		$sql ->bindValue(':cpf', $cpf);
		$sql ->execute();
		return $sql ->fetch();
	}

	public function listarParticipantes($id_oficina)
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_participante WHERE id_oficina = :id_oficina");
		$sql ->bindValue(':id_oficina', $id_oficina);
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function listaOficinas()
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_oficinas");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function listaOficinasID($id_oficina)
	{
		$sql = $this->pdo->prepare("SELECT * FROM tb_oficinas WHERE id = :id_oficina");
		$sql ->bindValue(":id_oficina", $id_oficina);
		$sql ->execute();
		return $sql ->fetch();
	}

	public function listaOficinasSUM()
	{
		$sql = $this->pdo->prepare("SELECT *, SUM(qnt_vagas - vagas_preenchidas) as vagas_restantes FROM tb_oficinas GROUP BY id");
		$sql ->execute();
		return $sql ->fetchAll();
	}

	public function cadastrar($nome, $cpf, $endereco, $bairro, $celular, $oficina, $cargo, $setor, $transporte)
	{
		$sql = $this->pdo->prepare("INSERT INTO tb_participante (nome, cpf, endereco, bairro, celular, id_oficina, cargo, setor, transporte) VALUES(:nome, :cpf, :endereco, :bairro, :celular, :oficina, :cargo, :setor, :transporte)");
		$sql ->bindValue(':nome', $nome);
		$sql ->bindValue(':cpf', $cpf);
		$sql ->bindValue(':endereco', $endereco);
		$sql ->bindValue(':bairro', $bairro);
		$sql ->bindValue(':celular', $celular);
		$sql ->bindValue(':oficina', $oficina);
		$sql ->bindValue(':cargo', $cargo);
		$sql ->bindValue(':setor', $setor);
		$sql ->bindValue(':transporte', $transporte);
		$sql ->execute();

		if (!empty($oficina)) {
			$sql2 = $this->pdo->prepare("SELECT vagas_preenchidas FROM tb_oficinas WHERE id = :oficina");
			$sql2 ->bindValue(':oficina', $oficina);
			$sql2 ->execute();
			$vagas = $sql2->fetch();

			$atualiza_vagas = $vagas['vagas_preenchidas']+1;

			$sql3 = $this->pdo->prepare("UPDATE tb_oficinas SET vagas_preenchidas = :atualiza_vagas WHERE id = :oficina");
			$sql3 -> bindValue(":atualiza_vagas", $atualiza_vagas);
			$sql3 -> bindValue(":oficina", $oficina);
			$sql3 ->execute();
		}
	}	

	
	/*public function classificacaoGeral()
	{
		$sql = $this->pdo->prepare("SELECT p.id, p.nome, SUM(c.vest_tradicional+c.originalidade+c.deprec_preconceituoso+m.desenvoltura+m.lideranca+m.animacao+m.figurino+q.evolucao+q.figurino+q.animacao+q.alinhamento+q.coreografia+q.harmonia) as total FROM tb_quesitos_casamento AS c INNER JOIN tb_participantes AS p ON c.id_participante = p.id INNER JOIN tb_quesitos_marcador as m ON p.id = m.id_participante INNER JOIN tb_quesitos_quadrilha AS q ON p.id = q.id_participante GROUP BY c.id_participante ORDER BY p.id DESC");
		$sql ->execute();
		return $sql ->fetchAll();
	}*/
}
?>