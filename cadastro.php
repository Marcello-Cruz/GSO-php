<?php
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST ['email'];

echo "Nome:".$nome; "<br>"
echo "<br>"
echo "Celular:".$celular; "<br>"
echo "<br>"
echo "Email:".$email; "<br>"

//conexão com Banco de Dados
$conexao = new PDO("mysql:host=localhost:3306;
                   "dbname=agenda",
                   "root",
                   "usbw");
$insert = "INSERT INTO tb_contato (nome,celular,email")
           VALUES ('$nome','$celular','$email');
$conexao->exec($insert);
?>