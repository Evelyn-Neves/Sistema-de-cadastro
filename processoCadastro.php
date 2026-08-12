<?php
$nome = htmlspecialchars($_POST['nome_comp']);
$idade = htmlspecialchars($_POST['idade']);
$profi = htmlspecialchars($_POST['profis']);
$salario = htmlspecialchars($_POST['sal']);
$exp = htmlspecialchars($_POST['exp_ant']);
echo"<h1> Sua informações: </h1>
<p><strong> Nome Completo: </strong> $nome</p> <p><strong> Idade:</strong>  $idade </p>
<p><strong> Profissão:</strong>  $profi </p>
<p><strong> Salário:</strong> R$  $salario </p> <p><strong> Experiência anterior:</strong>  $exp </p>
<p>Seja bem-vindo(a) $nome! Sua experiência como $profi com $exp será <strong>fundamental</strong> para nossa equipe!</p>";
echo '<a href="cadastro.html">Voltar</a>';
?>