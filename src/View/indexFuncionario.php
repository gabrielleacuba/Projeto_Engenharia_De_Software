<?php
	session_start(); // pega a seção para poder verificar se o usuario não esta autenticado
	include("verificalogin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="imagens/hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css interno -->
    <link rel="stylesheet" href="css/indexGerente.css">

    <!-- Icones decorativos-->
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
    <script src="jquery/jquery.js" type="text/javascript"></script>
    <script src="jquery/index.js"></script>

</head>

<body class="row">
    <div class="col-3  barra-lateral" style="padding-right: 0 !important">
        <nav class="nav flex-column">

            <img src="imagens/hogwarts.png" alt="Hogwarts">

            <h3>Loja Hogwarts </h3>
            <div class="scroll">

                <div class="menu-list">

                    <ul class="menuLink" id="nav">

                        <li id="home" onclick="home()" class="button">
                            <a><i class="fab fa-fort-awesome fa-fw"></i> Home
                        </a>
                        </li>
                        <!-- Bruxos -->
                        <li data-toggle="collapse" data-target="#bruxos" class="collapsed active bruxos">
                            <a><i class="fas fa-hat-wizard fa-fw"></i></i> Bruxos<span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="bruxos">
                            <!-- Submenu -->
                            <li id="CadastrarBruxo" onclick="CadastrarBruxo()" class="button active"><a><i class="fas fa-angle-right"></i>  Cadastrar </a></li>
                            <li id="BuscarBruxo" onclick="BuscarBruxo()" class="button active"><a><i class="fas fa-angle-right"></i> Buscar </a></li>

                        </ul>
                        <!-- Artigos mágicos -->
                        <li data-toggle="collapse" data-target="#produtos" class="collapsed active">

                            <a><i class="fas fa-broom fa-fw"></i> Artigos Mágicos <span class="arrow"></span> </a>
                        </li>
                        <ul class="sub-menu collapse" id="produtos">
                            <!-- Submenu -->
                            <li id="CadastrarProduto" onclick="CadastrarProduto()" class="button">
                                <a> <i class="fas fa-angle-right"></i>Cadastrar </a>
                            </li>
                            <li id="BuscarProduto" onclick="BuscarProduto()" class="button">
                                <a> <i class="fas fa-angle-right"></i>Buscar </a>
                            </li>

                        </ul>

                        <!-- Pedidos -->
                        <li data-toggle="collapse" data-target="#pedidos" class="collapsed active">
                            <a><i class="fas fa-cash-register fa-fw"></i> Pedidos <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="pedidos">
                            <!-- Submenu -->
                            <li id="CadastrarPedido" onclick="CadastrarPedido()" class="button">
                                <a> <i class="fas fa-angle-right"></i>Cadastrar </a>
                            </li>
                            <li id="BuscarPedido" onclick="BuscarPedido()" class="button">
                                <a> <i class="fas fa-angle-right"></i>Buscar </a>
                            </li>

                        </ul>

                        <!-- Relatório-->
                        <li id="Relatorio" onclick="Relatorio()" class=" button ">
                            <a>
                                <i class="fas fa-chart-line fa-fw"></i> Relatório
                            </a>
                        </li>
                        <!-- Funcionário-->
                        <li data-toggle="collapse" data-target="#funcionario" class="collapsed active">
                            <a><i class="fas fa-cash-register fa-fw"></i> Funcionários <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="funcionario">
                            <!-- Submenu -->
                            <li id="CadastrarFuncionario" onclick="CadastrarFuncionario()" class="button">
                                <a> <i class="fas fa-angle-right"></i>Cadastrar </a>
                            </li>
                            <li id="BuscarFuncionario" onclick="BuscarFuncionario()" class=" button ">
                            <a> <i class="fas fa-angle-right "></i>Buscar </a>
                        </li>

                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Barra do topo  -->
    <div class="col" style="padding-left: 0 !important">
        <div id="username">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0 h1"></span>
                <div id="login">
                    <?php echo $_SESSION['usuario'];?> 
                    <a href = "logout.php"><i class="fas fa-door-open"></i></a>
                </nav>
            </div>
            <div>
                <iframe id="frame" src="home.php" frameborder="0"></iframe>
            </div>
        </div>



        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js " integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js " integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb " crossorigin="anonymous "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js " integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn " crossorigin="anonymous "></script>
</body>

</html>;