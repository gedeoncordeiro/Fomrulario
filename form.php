<?php
    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        
        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES ('$nome,'$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')"); 
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form GD</title>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b> </legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Telefone</label>
                </div>
                <br>
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
                <div class="inputBox">
                    <label for="nome"> <b>Data de Nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento"required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Estado</label>
                </div>
                <br>
                 <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="entradaDados" required>
                    <label for="nome" class="caixaDados">Endereço</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
                
                
            </fieldset>
        </form>
    </div>
</body>
</html>