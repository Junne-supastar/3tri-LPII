<?php include "../adm/topo.php";
    ?>
    <header>
        <div class="logo-frase">
            <figure id="Logo" class="mb-4"> <img src="../IMG/logo.png" alt=""></figure>

            <div class="texto">
                <h1 id="h1-pagamento">
                    Seu guarda-roupa <span>novo</span> está aqui!
                </h1>
                <legend>Cadastre sua forma de pagamento e aproveite ao Máximo Suas<br>Compras de Roupas com Facilidade e
                    Segurança!
                </legend>
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
                         <a class="nav-link text-light " href="#">Produtos</a>
                    </li>
               </ul>
    </header>

    <hr class="hr-um">
    <div class="container conteudo">

        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../IMG/6 (1).webp" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Calça de Alfaitaria Rosa</h5>
                <p class="card-text">R$</p>
                <h2 class="card-text">99,99</h2>
                <p id="msg" style="font-size: smaller; font-weight: 200; color: gray;"> *TAMANHO G </p>
                <a href="#buy" class="btn btn-primary cad-card" onclick="Pagar(this)"
                    type="submit">Comprar</a>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../IMG/6.webp" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Saia Plissada com Renda</h5>
                <p class="card-text">R$</p>
                <h2 class="card-text">59,99</h2>
                <p id="msg" style="font-size: smaller; font-weight: 200; color: gray;"> *TAMANHO P </p>
                <a href="#buy" class="btn btn-primary cad-card" onclick="Pagar()">Comprar</a>
            </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../IMG/3.webp" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Vestido Midi de Coração</h5>
                <p class="card-text">R$</p>
                <h2 class="card-text">119,99</h2>
                <p id="msg" style="font-size: smaller; font-weight: 200; color: gray;"> *TAMANHO M </p>
                <a href="#buy" class="btn btn-primary cad-card" onclick="Pagar(this)">Comprar</a>
            </div>
        </div>
    </div>

    <hr>


    <h1 class="título" id="buy">
        Insira seus <span>dados</span> abaixo!
    </h1>

    <div class="container">
        <form action="" method="get" name="compra" id="compra" onsubmit="pagar()">
            

            <div class="form-group cpf">
                <br>
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="xxx.xxx.xxx-xx"
                    onkeypress="mascara_cpf(this)" onkeydown="return somente_numero(event)" maxlength="14"
                    onkeyup="salto(this.name,this.value)" required>
            </div>
            <div class="form-group cpf">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx)xxxxx-xxxx"
                    onkeypress="mascara_telefone(this)" onkeydown="return somente_numero(event)" maxlength="14"
                    onkeyup="salto(this.name,this.value)" required>
            </div>



            <div class="form-group">
                <label for="pgmt">Pagamento</label>
                <select id="pgmt" name="pgmt" class="form-control" onchange="mudar(this)"
                    onkeyup="salto(this.name,this.value)">
                    <option selected>Escolher...</option>
                    <option value="Cartão" id="Cartão">Cartão</option>
                    <option value="Pix" id="Pix">Pix</option>
                </select>
            </div>


            <div class="form-group" id="cartao" style="display: none;">
                <label for="numero">Nº do Cartão </label>
                <input type="text" class="form-control" id="numero" name="numero" onkeypress="mascara_numero(this)"
                    onkeydown="return somente_numero()" onkeyup="salto(this.name,this.value)" maxlength="19">
                <label for="Cod">Codigo de Segurança</label>
                <input type="text" class="form-control" id="cod" name="cod" onkeydown="return somente_numero(t)"
                    onkeyup="salto(this.name,this.value)" maxlength="3">
                <label for="venc">Vencimento </label>
                <input type="text" class="form-control" id="venc" name="venc" onkeypress="mascara_vencimento(this)"
                    onkeydown="return somente_numero()" maxlength="5">
            </div>

            <div class="pag-pix" id="pix" style="display: none;">
                <div class="pix"><img src="IMG/pix.png" alt=""></div>
                <div class="pix-manual">
                    <h5>Ou insira</h5>
                    <p> dcta478j-196l-03fm-t6gh-4298er7845m2</p>
                    <h5>Nome</h5>
                    <p>Pinklothes Loja </p>
                </div>
            </div>
            
            <br><br>
            <h5>Produtos selecionados</h5>

            <div class="roupas" onkeyup="salto(this.name,this.value)">
                <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="checkbox" value="checkbox1" id="opcao1" name="opcao1" onchange="calculo(99.99,this.checked)">
                    <label class="form-check-label" for="opcao1">Calça de Alfaitaria Rosa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="checkbox2" id="opcao2" name="opcao2"
                         onchange="calculo(59.99,this.checked)">
                    <label class="form-check-label" for="opcao2">Saia Plissada com Renda
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input form-check-inline" type="checkbox" value="checkbox3" id="opcao3"
                        name="opcao3" onchange="calculo(119.99,this.checked)">
                    <label class="form-check-label" for="opcao3">Vestido Midi Com Estampa de Coração
                    </label>
                </div>
                <div id="valor-pgto">
                    <p class="card-text">R$</p>
                    <h1 class="card-text"><output id="total">0,00</output></h1>
                </div>
            </div>
            <br>


            <a href="index.html"><button type="submit" class="btn btn-primary cad-card">Pagar</button></a>
            <button type="reset" class="btn btn-secondary cad-card-canc">Cancelar</button>
        </form>
    </div>

    <?php include "../adm/rodape.php"?>