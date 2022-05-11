@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar Observação</h1>

    <form action="{{route('observacao.update', $observacao->id)}}" method="post">
    @method('PATCH')
    @csrf
    <div class="row">
        <label for="" class="form-label">Texto</label>
        <input type="text" name="texto" class="form-control" value="{{ $observacao->texto }}">
    </div>

    <button type="submit">salvar</button>

    
    </form>
    
</body>
</html>