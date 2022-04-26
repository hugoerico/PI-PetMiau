@include('layouts.header')
<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif
    <h1>Lista de endereco</h1>
    <a href="{{route('endereco.create')}}" class="btn btn-sm btn-primary">Criar endereco</a>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>rua</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                <tr>
                    <td>{{ $endereco->id }}</td>
                    <td>{{ $endereco->rua }}</td>

                    <td>
                        
                        <a href="" class="btn btn-sm btn-warning">Editar</a>
                        <form method="POST" action="" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger" onsubmit="return remover()">Apagar</button>
                        </form>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    
</body>
</html>