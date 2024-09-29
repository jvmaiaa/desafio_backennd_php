<?php
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        include_once('../backend/database/connection.php');

        $result = pg_query($conexao, "INSERT INTO usuarios (nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frontend/cadastra.css">
    <link rel="stylesheet" href="../frontend/voltar.css">
    <title>Cadastra</title>
    
</head>
<body>
<a id="voltar" class="voltar-btn" href="home.php" aria-label="Voltar para a página inicial">Voltar</a>
    <div class="box">
      <form action="cadastra.php" method="POST">
        <fieldset>
          <legend><strong>Formulário de Cadastro</strong></legend>
          <br>
          <div class="inputBox">
              <input type="text" name="nome" id="nome" class="inputUser" required>
              <label for="nome" class="labelInput">Nome completo</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="text" name="email" id="email" class="inputUser" required>
              <label for="email" class="labelInput">Email</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="password" name="senha" id="senha" class="inputUser" required>
              <label for="senha" class="labelInput">Senha</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="tel" name="telefone" id="telefone" class="inputUser" required>
              <label for="telefone" class="labelInput">Telefone</label>
          </div>
          <p>Sexo:</p>
          <input type="radio" id="feminino" name="genero" value="feminino" required>
          <label for="feminino">Feminino</label>
          <br>
          <input type="radio" id="masculino" name="genero" value="masculino" required>
          <label for="masculino">Masculino</label>
          <br>
          <input type="radio" id="outro" name="genero" value="outro" required>
          <label for="outro">Outro</label>
          <br><br>
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" required>
          <br><br><br>
          <div class="inputBox">
              <input type="text" name="cidade" id="cidade" class="inputUser" required>
              <label for="cidade" class="labelInput">Cidade</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="text" name="estado" id="estado" class="inputUser" required>
              <label for="estado" class="labelInput">Estado</label>
          </div>
          <br><br>
          <div class="inputBox">
              <input type="text" name="endereco" id="endereco" class="inputUser" required>
              <label for="endereco" class="labelInput">Endereço</label>
          </div>
          <br><br>
          <input type="submit" name="submit" id="submit">
        </fieldset>
      </form>
    </div>
</body>
</html>