<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2>Lista de Pessoas</h2>
<hr />
<?php

//PASSO 1_ Efetuar a conexao com o banco de dados
//PASSO 2_ Montar o SQL para a conulta
//SELECT * FROM pessoa;
//PASSO 3_ Executar o SQL RETORNANDO PARA UMA VARIAVEL
//PASSO 4_ Verificar se o NUMERO DE LINHAS da consulta é MAIOR QUE 0
//PASSO 5_ Pegar cada LINHA (VETOR) da consulta e ADICIONAR em uma variavel
//PASSO 6_ Fechar conexao com o Banco de Dados

//PASSO 1_
$con = mysql_connect("localhost","root","coti");
mysql_select_db("aula02",$con);

//PASSO 2_
$sql = "SELECT * FROM pessoa";

//PASSO 3_ 
$rs = mysql_query($sql,$con);

//PASSO 4_
//mysql_num_rows() -> verifica o numero de linhas que rs possui
if(mysql_num_rows($rs) > 0){
	//mysql_fetch_array() -> Pega a proxima linha de RS e adiciona na variavel $row
	while($row = mysql_fetch_array($rs)){
		echo "Nome...: ".$row["nome"];
		echo "<br>E-mail...: ".$row["email"];
		echo "<br>Idade...: ".$row["idade"];
		echo "<hr />";
	}
}else{
	echo "Nenhuma pessoa encontrada";
}

//PASSO 6_
mysql_close($con);
?>
<br />
<a href="index.php">
Voltar
</a>