<script type="text/javascript">
	function formatacpf(c){
    if(c.value.length ==3){
        c.value += '.';
    }
    if(c.value.length==7){
        c.value += '.'; 
    }
    if(c.value.length==11){
        c.value += '-'; 
    }
}


function verificarCPF(c){
    var i;
    var string = c;
    var num    = string.match(/\d/g).join('');
    var s = num;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
    var cpf = s;

    if ( (cpf == "00000000000") || (cpf == "11111111111") || (cpf == "22222222222") || (cpf == "33333333333") 
        || (cpf == "44444444444") || (cpf == "55555555555") || (cpf == "66666666666")
        || (cpf == "77777777777") || (cpf == "88888888888") || (cpf == "99999999999")){
        alert("CPF Inválido");
        v = true;
        document.getElementById('idCpf').value=null;
        return false; 
    }  
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }

    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido");
        v = true;
        document.getElementById('idCpf').value=null;
        return false;   
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        document.getElementById('idCpf').value=null;
        return false;
        
    }
    if (!v) {
        
    }

}
</script>
<h4 align="center">Secretaria Municipal de Administração</h4>
<form action="" method="POST" role="form">
	<legend>Informe o CPF</legend>

	<div class="form-group">
		<input type="text" id="idCpf" placeholder="000.000.000-00" name="cpf" class="form-control" maxlength="14" minlength="14" onblur="return verificarCPF(this.value)" onkeypress="formatacpf(this);" required>
	</div>
    <div class="form-group d-flex justify-content-end">
	<button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Expositor</th>
            <th>Oficina</th>
            <th>Total de Vagas</th>
            <th>Vagas restantes</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($info_oficina as $info):?>
        <tr>
            <td><?=utf8_encode($info['expositor'])?></td>
            <td><?=utf8_encode($info['nome'])?></td>
            <td><?=$info['qnt_vagas']?></td>
            <td><?=$info['vagas_restantes']?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>