@include('layouts.header')

<body>
    @include('layouts.menu')

    <h1>observação</h1>

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Texto</th>
                    <th>Pet_id</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($observacoes as $observacao)
                <tr>
                    <td>{{ $observacao->id }}</td>
                    <td>{{ $observacao->texto }}</td>
                    <td>{{ $observacao->pet_id }}</td>

                    <td>

                        <a href="{{ Route('observacao.edit', $observacao->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form method="POST" action="{{ Route('observacao.destroy', $id = $observacao->id) }}" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"
                                onsubmit="return remover()">Apagar</button>
                        </form>

                        
                    </td>

                    
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
    <h1>criar observação</h1>

    <form action="{{ route('observacao.store', $id = $pet_id) }}" method="post">
        @method('PATCH')
        @csrf

        <div class="row">
            <span class="form-label">Obs</span>
            <textarea class="form-control" name="texto"></textarea>


        </div>

        <button type="submit">salvar</button>
    </form>

</body>

</html>
