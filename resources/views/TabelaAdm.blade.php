@extends('layout.main')

@section('title', 'Home')

@section('content')
    <!-- section tabela -->
    <section class="table textos">
        <h1 class="titulos">Clientes</h1>
        <!-- tabela -->
        <table border="1">

            <!-- thread com campos fixos -->
            <thead>
                <tr>
                    <!-- campos fixos -->
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Defeito</th>
                    <th>Tipo Do Produto</th>
                    <!-- campo fixo para deleta e editar -->
                    <th colspan="2">Açoes</th>
                </tr>
            </thead>
            @foreach ($clients as $client)
                <tbody>
                    <tr>
                        <td> {{ $client->name }}</td>
                        <td> {{ $client->phone }}</td>
                        <td> {{ $client->address }}</td>
                        <td> {{ $client->cpf }}</td>
                        <td> {{ $client->email }}</td>
                        <td> {{ $client->defect }}</td>
                        <td> {{ $client->type }}</td>

                        <td>
                            <div class="formTabelaAdm">
                                <button>
                                    <a href="/TabelaAdm/{{ $client->id }}">
                                        <abbr title="editar registro">
                                            <img src="../img/icones fontwesome/edit-solid.svg" alt="icone editar">
                                        </abbr>
                                    </a>
                                </button>
                            </div>
                        </td>
                        <td>
                            <form action="/TabelaAdm/{{ $client->id }}" method="post" class="formTabelaAdm">
                                @csrf
                                @method('DELETE')

                                <button type="submit">
                                    <abbr title="excluir registro"><img src="../img/icones fontwesome/trash-solid.svg"
                                            alt="icone deletar"></abbr>
                                </button>
                            </form>
                        </td>

                    </tr>
                </tbody>
            @endforeach
        </table>
    </section>
    <!-- link para o formulario -->
    <!-- usei divi por n estar centralizando -->
    <div class="voltar_form_div">
        <a class="textos voltar_form" href="Index.php#Formulario">Adicionar Cliente</a>
    </div>
@endsection
