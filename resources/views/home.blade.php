@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section id="home">
        <h1>Cadastro de Clientes</h1>

        <a class="btn success" href="{{ route('client.create') }}" title="Novo cliente">
            Novo cliente
        </a>

        @if (count($clients) > 0)
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome completo</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td><strong>{{ $client->id }}</strong></td>
                        <td>
                            <img src="/storage/{{ $client->photo }}" alt="Foto" />
                            <strong>{{ $client->name }}</strong>
                        </td>
                        <td><a class="mail" href="mail:{{ $client->email }}">{{ $client->email }}</a></td>
                        <td>{{ $client->phone }}</td>
                        <td class="action">
                            <a href="{{ route('client.show', ['id' => $client->id]) }}" title="Editar">
                                <svg class="icon edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Free 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg>
                            </a>
                        </td>
                        <td class="action">
                            <a href="{{ route('client.destroy', ['id' => $client->id]) }}" title="Excluir" onclick="return confirm('Tem certeza de que deseja remover este cliente?')">
                                <svg class="icon delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"/></svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <div style="margin-top: 1rem;">
                Não foram encontrados registros.
            </div>
        @endif
    </section>
@endsection
