@extends('layout.main')

@section('title', 'Home')

@section('content')
    <header>
        <h1 class="titulos">Assistencia Tecnica</h1>
        <p class="textos">Seja Bem-Vindo</p>
        <!-- menu -->
        <nav>
            <ul>
                <li><a href="#Serviços" class="textos hover">Serviços</a></li>
                <li><a href="#Formulario" class="textos hover">Registra-se</a></li>
            </ul>
        </nav>
    </header>

    <!-- slider by w3school -->
    <section class="slideshow-container">
        <div class="mySlides fade">
            <img src="../img/Banners/Hardware.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Sistemas.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Video Game.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../img/Banners/Celulares.png" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>
    <!-- serviços (id="servicos = ancora")-->
    <h1 class="servicos titulos" id="Serviços">Serviços</h1>

    <!-- cards -->
    <section class="row">
        <div class="card green">
            <h2 class="titulos">Hardware</h2>
            <p>
            <ul>
                <li class="textos">Solda do Chip</li>
                <li class="textos">Reparo de Componestes</li>
                <li class="textos">Reparo em Terminais dos Processadores</li>
            </ul>
            </p>
        </div>

        <div class="card blue">
            <h2 class="titulos">Sistema</h2>
            <p>
            <ul>
                <li class="textos">Instalaçao de Sistemas Operacionais</li>
                <li class="textos">Recuperaçao e Backup de Arquivos</li>
                <li class="textos">Gravaçao de Bios</li>
            </ul>
            </p>
        </div>

        <div class="card red">
            <h2 class="titulos">Video Game</h2>
            <p>
            <ul>
                <li class="textos">Reparo em Playstation 3, 4 e 5</li>
                <li class="textos">Reparo em Xbox 360, One, X</li>
                <li class="textos">Repara em Nintendo Switch</li>
            </ul>
            </p>
        </div>

        <div class="card cian">
            <h2 class="titulos">Celulares</h2>
            <p>
            <ul>
                <li class="textos">Troca de Tela</li>
                <li class="textos">Reparo de Componestes</li>
                <li class="textos">Atualizaçao de Softwares</li>
            </ul>
            </p>
        </div>
    </section>

    <section class="form">
        <h1 class="titulos" id="Formulario">Formulario</h1>
        <p class="textos">Considere fazer um simples e rapido registro para obter um possivel reparo em seu equipamento.
        </p>

        <form action="/create" method="post">
            @csrf
            <label for="nome" class="textos">Nome</label>
            <input class="textos" type="text" name="name" id="nome" placeholder="Digite Seu Nome" required><br>

            <label for="telefone" class="textos">Telefone</label>
            <input class="textos" type="tel" name="phone" id="telefone" placeholder="Digite Seu Telefone"
                required><br>

            <label for="endereço" class="textos">Endereço</label>
            <input class="textos" type="text" name="address" id="endereco" placeholder="Digite Seu Endereço"
                required><br>

            <label for="cpf" class="textos">CPF</label>
            <input class="textos" type="text" name="cpf" id="cpf" placeholder="Digite Seu Cpf" required><br>

            <label for="email" class="textos">Email</label>
            <input class="textos" type="email" name="email" id="email" placeholder="Digite Seu Email" required><br>

            <label for="defeito" class="textos">Defeito</label>
            <textarea class="textos" name="defect" id="defeito" cols="30" rows="10"
                placeholder="Descreva o Defeito Do Equipamento" required></textarea><br>



            <label class="textos" for="defeito">Tipo Do Produto</label>
            <select class="textos" required name="idTypeProduct">
                <option value>Selecione um Tipo</option>

                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->type }}</option>
                @endforeach
            </select>
            <!-- btn cadastrar -->
            <input class="textos" type="submit" name="btn-cadastrar" value="Cadastrar">
        </form>
        <!-- ver tabela de registro -->
        <a class="textos hover" href="TabelaAdm">Lista de Clientes</a>
    </section>
@endsection
