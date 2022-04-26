@include('layouts.header')
<body>
    @include('layouts.menu')

    
    <h1>editar endereco</h1>

    <form action="{{route('endereco.update', $endereco->id)}}" method="post">
        @method('PATCH')
    @csrf
    <span>rua</span>
    <input type="text" name="rua" id="" value="{{$endereco->rua}}">

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>