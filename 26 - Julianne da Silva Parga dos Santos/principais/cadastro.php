    <?php include "../adm/topo.php";?>
    <header>
        <div class="logo-frase">
            <figure id="Logo" class="mb-4"> <img src="../IMG/logo.png" alt=""></figure>

            <div class="texto">
                <h1>
                    Seu guarda-roupa <span>novo</span> está aqui!
                </h1>
                <legend>Cadastre-se agora na Pinklothes e comece a <br> sua jornada para um estilo inigualável!</legend>
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
                         <a class="nav-link text-light " href="pagamento.php">Produtos</a>
                    </li>
               </ul>
          </nav>
    </header>

    <main>
        <section class="container">
            <form name="cadastro" id="cadastro" onsubmit="cadastrar(this)" oninput="maiuscula(this)" method="post" action="cadastro_usu.php" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Login</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="login" onkeydown="return somente_letra(event);" required >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" onkeydown="return somente_letra(event);" required   >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" onkeydown="return somente_letra(event)" required >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                    </div>
                    
                    
                    <div class="form-group col-md-12">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"oninput="senha()" maxlength="10" required >
                    </div>
                    <div class="form-group col-md-12">
                        <label for="senha2">Confirme sua senha</label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Senha"
                        oninput="senha()" maxlength="10" >
                        
                    </div>
                    <p id="msg" style="font-size: smaller; font-weight: 200; color: gray;"> * As senhas não conferem </p>
                    
                    <div class="form-group col-md-12">
                        <label for="nivel">Nível</label>
                        <input type="text" class="form-control" name="nivel" id="nivel" maxlength="3" required >
                    </div>
                </div>
                
                    
                    <div class="row">
                        
                    <div class="form-group col-6">
                        <label for="inputEstado">Estado</label>
                        <select id="inputEstado" name="inputEstado" class="form-control" >
                            <option selected>Escolher...</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="sp">São Paulo</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-group col-6">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control" onkeyup="salto(this.name,this.value)">
                            <option selected>Escolher...</option>
                            <option value="f">Feminino</option>
                            <option value="m">Masculino</option>
                        </select>
                    </div>
                </div>
                
                <a href="index.html"><button type="submit" class="btn btn-secondary " >Cadastrar</button></a>
                <button type="reset" class="btn btn-secondary cad-card-canc btn-danger">Cancelar</button>
            </section>
        </form>
    </main>
    <?php include "../adm/rodape.php"?>