<?php include "../adm/topo.php";?>
<header>
          <div class="logo-frase">
               <figure id="Logo" class="mb-4"> <img src="../IMG/logo.png" alt=""></figure>

               <div class="texto">
                    <h1>
                         Seu guarda-roupa <span>novo</span> está aqui!
                    </h1>
                    <legend>Faça login agora na Pinklothes e comece a <br> sua jornada para um estilo inigualável!</legend>

               </div>
          </div>

          <nav>
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
               </ul>
          </nav>
    </header>


        <div class="container mb-4">
            <form name="form" method="post" action="#">
            <div class="form-group" >
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login"  name="login"  placeholder="Seu login">
                
            </div>
           
            <div class="form-group ">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
                
            <div class="text-start text-danger mb-2">
                <?php include "valida.php";?>
            </div>
            
            <div class="text-center">
                <a href="../principais/cadastro.php">Não possuo cadastro</a>
            </div>



            <button type="submit" class="btn btn-primary cad bg-dark text-light">Enviar</button>
            </form>
        </div>

        
    <?php include "rodape.php";?>