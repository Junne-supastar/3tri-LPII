<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topo - pinkklothes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">

</head>
<body>
<div class="container-fluid bg-dark text-white link-light p-3">
        <div class="row">
            <div class="col text-start">
                Pinklothes
            </div>
            <div class="text-end mr-2" >
              <?php 
                session_start();
                if(isset($_SESSION['login'])){
                $login = $_SESSION['login'];
                $nome = $_SESSION['nome'];
                $nivel = $_SESSION['nivel'];
                
                echo "Bem Vindo, $nome |";
                if($nivel == 'adm'){
                    echo "<a href='/26 - Julianne da Silva Parga dos Santos/adm/adm.php'> Admin </a> |";
                } 
                echo "<a href='/26 - Julianne da Silva Parga dos Santos/adm/logout.php'> Logout</a>";
                } else {
                    echo "<a href='/26 - Julianne da Silva Parga dos Santos/adm/login.php'> LOGIN </a> |";
                    echo "<a href='/26 - Julianne da Silva Parga dos Santos/principais/cadastro.php'> Não Possuo Cadastro </a>";

                }
              ?>
            </div>
        </div>
</div>
