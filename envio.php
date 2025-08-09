<?php
if (isset($_POST['submit'])) {
 include_once('config.php');
 $nome = $_POST['nome'];
 $email = $_POST['email']; 
 $resultado = mysqli_query($conexao, "INSERT INTO tb_inscritos(nome, email) VALUES
('$nome', '$email')");
}
?>