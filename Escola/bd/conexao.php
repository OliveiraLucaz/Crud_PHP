<?php
#mysqli

$servidor  = "localhost"; #endereco do ip do servidor
$usuario = "root"; #usuario do banco de dados
$senha = ""; #senha do banco de dados
$database = "escola"; #nome do banco

#iniciando a conexao com o banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*#testando se a conexão com o banco deu certo
if($conexao){
    echo "conectado com sucesso ao banco de dados";
}else{
    echo "erro";
}*/

