<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2>Cadastro de Pessoa</h2>
<hr />
<!--
Ação do formulário é enviar os dados para a pagina gravar.php
method -> forma na qual os dados serao enviados
-->
<form action="gravar.php" method="post" name="f" onSubmit="return validar();">
Nome...: <input type="text" name="txtNome" />
<br /><br />
E-mail...: <input type="text" name="txtEmail" />
<br /><br />
Idade...: <input type="text" name="txtIdade" />
<br /><br />
<input type="submit" value="Gravar Dados" />
</form>
<br />
<div id="resposta">
</div>
<script>
function validar(){
	//Inicio da mascara => /^
	//Fim da mascara => $/
   var mNome = /^[A-Za-z áéíóú]{3,50}$/;
   var mIdade = /^[0-9]{1,3}$/;
   // . (ponto) significa qualquer caracter
   // + significa Varias vezes
   var mEmail = /^.+@.+\.[a-z]{2,4}$/;
   
   var msg = "";
   var flag = 0; //Se flag chegar ate o final sendo 0 significa que nao houve erro
   
   if(!f.txtNome.value.match(mNome)){
   	msg += "Preencha o campo nome corretamente<br>";
	//msg = msg + "Preencha o campo...";
	flag = 1;
   }

   if(!f.txtIdade.value.match(mIdade) 
   	|| f.txtIdade.value > 120){
   	msg += "Preencha o campo idade corretamente<br>";
	flag = 1;
   }
   
   if(!f.txtEmail.value.match(mEmail)){
   		msg += "Preencha o campo e-mail corretamente<br />";
		flag = 1;
   }


   if(flag == 0){
   	return true;
   }else{
    //Procura por algum elemento no qual o ID seja resposta, e o innerHTML adiciona a variavel msg na pagina
	document.getElementById('resposta').innerHTML = msg;
	return false;   
   }

}
</script>
<br />
<a href="listar.php">Listar as Pessoas</a>