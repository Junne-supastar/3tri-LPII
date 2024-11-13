<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['login'])){
        echo "
        <script> 
            alert('Área restrita a usuarios logados. Informe o seu login e senha');
            window.location = '/26 - Julianne da Silva Parga dos Santos/adm/login.php';
        </script>
    ";
    }
?>