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
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cadastro-user.css">
    <link rel="stylesheet" href="../cadastro_usuario/style-catalogo.css">

    <link rel="shortcut icon" href="../components/images/logo_pex.png" type="image/x-icon">


    <title>Cadastro do Cliente</title>

</head>

<body>

    <header>
        <nav>
            <a class="logo" href="../templates/catalogo.html">TheCargos</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a class="link-navbar" href="../templates/catalogo.html">Início</a></li>
                <li><a class="link-navbar" href="../templates/produtos.html">Produtos</a></li>
                <li><a class="link-navbar" href="../templates/trocas.html">Trocas e Devoluções</a></li>
                <li><a class="link-navbar" href="../templates/guia-medidas.html">Guia de Medidas</a></li>
            </ul>
            <ul class="nav-list">
                <li><a class="link-navbar" href="../templates/carrinho.html">Carrinho</a></li>
                <li><a class="link-navbar" href="../templates/userperfil.html">Perfil</a></li>
            </ul>
        </nav>
    </header>


    <h2 class="title">Cadastre-se e venha ser mais elegante com The cargos</h2>

    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
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

    <br><br>

    <footer>
        <div class="container-conectado">
            <h2>Mantenha-se conectado:</h2>
            <div class="div-contato">
                <a href="https://www.instagram.com/the_cargos/"><box-icon type="logo" color="white" size="md"
                        name="instagram-alt"></box-icon></a>
                <p>@the_cargos</p>
            </div>
            <div class="div-contato">
                <a href="https://www.tiktok.com/@the_cargos?_t=8d5eBefuMGz&_r=1"><box-icon type="logo" color="white" size="md"
                        name="tiktok"></box-icon></a>
                <p>@the_cargos</p>
            </div>
        </div>
        <div class="container-contato">
            <h2>Contato:</h2>
            <div class="div-contato">
                <a href="tel:11 94561-4648"><box-icon type='solid' color="white" size="md" name='phone'></box-icon></a>
                <p>11 94561-4648</p>
            </div>
            <div class="div-contato">
                <a href="thecargos.anywhere@gmail.com"><box-icon color="white" size="md" name='envelope'></box-icon></a>
                <p>thecargos.anywhere@gmail.com</p>
            </div>

        </div>
    </footer>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="../static/js/catalogo.js"></script>

</body>

</html>