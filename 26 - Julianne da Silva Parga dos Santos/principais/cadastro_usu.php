<?php
    include "../adm/conexao.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $nivel = trim($_POST['nivel']);;

        // criptografia hash
        $senha_hash = password_hash($senha,PASSWORD_DEFAULT);

        // verificação de login
        $sql = "select * from perfil where login = '$login'";
        $teste = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($teste);
        
        if($existe){
            echo "
            <script>
                alert('Login já cadastrado. Tente outro Login');
                history.back();
            </script>";
        } else{
            // inserindo os dados 
            $sql = "insert into perfil(login,senha,nome,email,nivel) values('$login','$senha_hash','$nome','$email','$nivel')";
            $cadastrar = mysqli_query($conexao,$sql);

            if($cadastrar){
                echo "
                <script> 
                    alert('Usuario Cadastrado com Sucesso!');
                    window.location = '../adm/login.php';
                </script>
            ";
            } else {
                echo "
                <p> Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o administrador do site para reportar o problema.  </p>
                <p> Clique <a href='cadastro.php'> aqui </a> para retornar ao formulário de cadastro </p>
            ";
            echo mysqli_error($conexao);
            }
        }   
    } 
    else{//tratamento de erro e redirecionamento
        echo "
            <p> Esta é uma página de tratamento de dados </p>
            <p> Clique <a href='cadastro.php'> aqui </a> para a acessar o formulário de cadastro </p>
            
        ";
    }

?>