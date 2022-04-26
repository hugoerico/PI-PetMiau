@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>cadastrar endereço</h1>

    <form action="{{route('endereco.store')}}" method="post">
    @csrf
    <span>rua</span>
    <input type="text" name="rua" id="">

    <button type="submit">salvar</button>
    </form>
    
</body>
</html>