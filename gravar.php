<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$nome = trim($_POST["txtNome"]);
$email = trim($_POST["txtEmail"]);
$idade = trim($_POST["txtIdade"]);

//PASSO 1_ Abrir a conexao com o Banco de Dados
//PASSO 2_ Montar o SQL para gravar
//PASSO 3_ Executar o SQL que foi montado no Banco de Dados
//PASSO 4_ Fechar a Conexao com o BANCO DE DADOS

//PASSO 1_
//mysql_connect() -> efetua conexao com o BANCO DE DADOS (MYSQL)
//mysql_connect(CAMINHO DO BANCO, USUARIO, SENHA)
$con = mysql_connect("localhost","root","coti");
//mysql_select_db() -> Escolhe a BASE DE DADOS que sera usada
//mysql_select_db(NOME DO BANCO, CONEXAO)
mysql_select_db("aula02",$con);

//PASSO 2_

//echo "Nome...: ".$nome;
//''
//'""'
//'".."'
//'".$nome."'
$sql = "INSERT INTO pessoa VALUES(NULL,'".$nome."',
		'".$email."',".$idade.")";

//PASSO 3_
//mysql_query() -> Executar um comando SQL qualquer no banco de dados
//mysql_query(O COMANDO SQL, CONEXAO)
if(mysql_query($sql,$con)){
	echo "Gravado com sucesso";
}else{
	echo "Erro ao Gravar";
}

//PASSO 4_
mysql_close($con);//Fechar a conexao com o banco de dados
?>

<br />
<a href="index.php">Voltar</a>