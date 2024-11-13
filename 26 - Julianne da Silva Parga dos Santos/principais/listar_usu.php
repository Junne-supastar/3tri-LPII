<?php
    include "../adm/conexao.php";

    $sql = "select * from perfil order by login";
    $seleciona = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topo - pinkklothes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .icones img{
        width: 1.3em;
        }
    </style>
</head>
<body>

<header>
    <div class="container-fluid bg-dark text-white link-light p-3">
        <div class="row">
            <div class="col text-start">
                Pinklothes
            </div>
            <div class="text-end mr-2" >
              <?php 
                if(isset($_SESSION['login'])){
                $login = $_SESSION['login'];
                $nome = $_SESSION['nome'];
                $nivel = $_SESSION['nivel'];
                
                echo "Bem Vindo, $nome |";
                if($nivel == 'adm'){
                    echo "<a href='../adm/adm.php'> Admin </a> |";
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

</header>

<nav class="text-end">
       <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
                 <a class="nav-link text-secondary" href="../1° Trimestre/index.html">Páginas</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link text-secondary" href="../index.php">Home</a>
        </li>
            <li class="nav-item cad bg-dark">
                 <a class="nav-link text-light " href="../principais/pagamento.php">Produtos</a>
            </li>
            <li class="nav-item cad bg-success ml-3">
                 <a class="nav-link text-light " href="../principais/cadastro.php">Cadastrar Novo</a>
            </li>

    </ul>       
</nav>

<div class="container">
        <div class="text-end mt-5 ">
    
                <h1 class="text-center mt-2 text-dark mb-5"> Lista de Usuários </h1>
    
                <!-- ********************************* Cabeçalho da Lista -->
                <div class="row mb-2 bg-dark text-light text-center p-3">
                    <div class="col-2"> Login </div>
                    <div class="col-1"> Senha </div>
                    <div class="col-2"> Nome  </div>
                    <div class="col-3"> Email </div>
                    <div class="col-2"> Nivel </div>
                    <div class="col-2"> Controle </div>
        </div>
    
        <?php
                while($exibe = mysqli_fetch_array($seleciona)){
                    $login = $exibe['login'];
    
        ?>
    
            <div class="row text-center p-1 ">
                <div class="col-2"> <?php echo $exibe['login'] ?></div>
                <div class="col-1"> *** </div>
                <div class="col-2"> <?php echo $exibe['nome'] ?> </div>
                <div class="col-3"> <?php echo $exibe['email'] ?> </div>
                <div class="col-2"> <?php echo $exibe['nivel'] ?> </div>
                <div class="col-2 icones">
                    <a href="ver_perfil.php?id=<?php echo $login?>"><img src="../img/ver.png"></a>
                    <a href="editar_perfil.php?id=<?php echo $login?>"><img src="../img/editar.png"></a>
                    <a href="excluir_perfil.php?id=<?php echo $login?>" onclick="return confirm('Confirma a Exclusão do Registro?')"><img src="../img/delete.png"></a>
                </div>
            </div>
                <?php
                }
                ?>
    
</div>

<?php include "../adm/rodape.php"?>