<?php
    include "../adm/conexao.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        
        $sql = "select * from perfil where login = '$login'";
        $testeLogin = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($testeLogin);

        if($existe){
            $dados = mysqli_fetch_array($testeLogin);
            $hash = $dados['senha'];
            if (password_verify($senha,$hash)){
                $nome = $dados['nome'];
                $nivel = $dados['nivel'];
                $email = $dados['email'];
                

                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['login'] = $login;
                $_SESSION['nome'] = $nome;                
                $_SESSION['nivel'] = $nivel;
                $_SESSION['foto'] = $foto;
                
                if($nivel == 'adm'){
                    header('location:../adm/adm.php');
                    exit();
                }
                else{
                    header('location:../index.php');
                    exit();
                }
            }
            else{
              echo "Senha Inválida";  
            }
        }else{
            echo "Usuário não Cadastrado.";
        }
    }


?>