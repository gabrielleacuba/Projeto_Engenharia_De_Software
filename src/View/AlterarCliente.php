<?php
session_start();
include("../Model/Cliente.php");
include("../Persistence/Conection.php");
include("../Persistence/ClienteDao.php");
$cpf = $_GET["codigo"];

$_SESSION['cpf']=$cpf;

$c1= new Cliente("",$cpf,"","","","","","","","","","");

//conexao com banco de dados
$con = new Conection("localhost","root","","lojahogwarts");
$con->conectar();

$cDAO = new ClienteDao();

$aux = $cDAO->buscarClienteFormulario($c1,$con->getLink());
while($row = mysqli_fetch_row($aux))
{
    $nome = "'".$row[0]."'";
    $cpfaux =  "'".$row[1]."'";  
    $residencial =  "'".$row[2]."'";
    $celular =  "'".$row[3]."'";
    $email =  "'".$row[4]."'";
    $cep =  "'".$row[5]."'";
    $logradouro =  "'".$row[6]."'";
    $bairro =  "'".$row[7]."'";
    $cidade =  "'".$row[8]."'";
    $complemento = "'".$row[9]."'";
    $numero = "'".$row[10]."'";
    $estado =  "'".$row[11]."'";

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alterar Bruxo</title>
    <meta name="author" content="Gabrielle">
    <link rel="icon" href="hogwarts.png">

    <!-- Responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastroCliente.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63cd9f4730.js"></script>
</head>

<body>

    <div class="Titulo">
        <h3>
            Alterar de Bruxo
        </h3>
    </div>
    <main class="principal">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form method="POST" action="../Controller/controller_AlterarCliente.php">
                    <div class="form-row">
                        <div class="form-group col-sm-12">

                            <label for="inputNome">Nome</label>
                            <input type="text"  name="nome" class="form-control" id="inputNome" value= <?php echo $nome ?>   required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputCpf"> CPF </label>
                            <input type="number" class="form-control" name="cpf" id="inputCpf" value= <?php echo $cpfaux ?>   disabled>
                            <div class="invalid-feedback">
                                Por Favor insira um CPF válido.
                            </div>
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="inputResidencial"> Residencial </label>
                            <input type="number" class="form-control" name="residencial" id="inputResidencial" value= <?php echo $residencial ?>  required>
                            <div class="invalid-feedback">
                                Por Favor insira um telefone válido.
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputCelular"> Celular </label>
                            <input type="number" class="form-control" id="inputCelular" name="celular" value= <?php echo $celular ?>  required>
                            <div class="invalid-feedback">
                                Por Favor insira um celular válido.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputEmail"> Email </label>
                            <input type="text" class="form-control" id="inputEmail"  name="email" value= <?php echo $email ?>  required>
                            <div class="invalid-feedback">
                                Por Favor insira um email válido.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputCep"> CEP </label>
                            <input type="number" class="form-control" name="cep" id="inputCep" value= <?php echo $cep ?>  required>
                            <div class="invalid-feedback">
                                Por Favor insira um cep válido.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-8">
                            <label for="inputEndereco"> Endereço </label>
                            <input type="text" name="logradouro" class="form-control" id="inputEndereco" value= <?php echo $logradouro ?>  required>
                            <div class="invalid-feedback">
                                Por Favor insira um enderecço válido.
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputNumero"> Número </label>
                            <input type="text" name="numero" class="form-control" id="inputNumero"value=<?php echo $numero ?> required>
                            <div class="invalid-feedback">
                                Por Favor insira um número válido.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="inputBairro"> Bairro </label>
                            <input type="text" class="form-control"  name="bairro" id="inputBairro" value=<?php echo $bairro ?> required>
                            <div class="invalid-feedback">
                                Por Favor insira um bairro válido.
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputCidade"> Cidade </label>
                            <input type="text" class="form-control" name="cidade" id="inputCidade" value=<?php echo $cidade ?> required>
                            <div class="invalid-feedback">
                                Por Favor insira um cidade válido.
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputEstado"> Estado </label>
                            <select id="inputEstado" class="form-control"  name="estado">
                                <option selected> Escolha ...</option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amapá</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espírito Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins </option>
                            </select>
                           
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-8">
                            <label for="inputComplemento">Complemento</label>
                            <input type="text" class="form-control" name="complemento" id="inputComplemento" value=<?php echo $complemento ?>>
                        </div>
                    </div>
                    <div class="form-row">
                        <div id="botao" class="col-sm-8">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</html>