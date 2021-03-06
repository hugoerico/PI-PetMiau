@include('layouts.header')
<body>
    @include('layouts.menu')

    <h1>editar pet</h1>

    <form action="{{route('pet.update', $pet->id)}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="row">
        <span class="form-label">Nome</span>
        <input type="text" name="nome" class="form-control" value="{{ $pet->nome }}" >
        </div>

        
        <div class="row">
            <span class="form-label">Data de Nascimento</span>
            <input type="date"  name="data_nascimento" class="form-control" value="{{ $pet->data_nascimento}}">
        </div>
        
        
        <div class="row">
            <span class="form-label">Peso</span>
            <input type="number" min="0" max="10000" name="peso" class="form-control" value="{{ $pet->peso}}">
        </div>

        <div class="row">
            <span class="form-label">Obs</span >
                <input type="text" class="form-control" name="obs" value="{{$pet->obs}}">
        </div>
        <div class="row">
            <span class="form-label">Tipo</span>

            <select class="form-select" name="tipo_id" id="">
                @foreach($tipos as $tipo)

                <option value="{{$tipo->id}}" @if($tipo->id == $pet->tipo_id) selected @endif >{{$tipo->nome}}</option>

                @endforeach

            </select>
        </div>
        <div class="row">
            <span class="form-label">Vacinas</span>

            <select class="form-select" name="vacinas[]" id="">
                @foreach($vacinas as $vacina)

                <option value="{{$vacina->id}}" >{{$vacina->nome}}</option>

                @endforeach

            </select>

        </div>

        <div class="row">
            <span class="form-label">Imagem</span>
            <input type="file" class="form-control" name="imagem">
        </div>


    <button type="submit">salvar</button>
    </form>
    
</body>
</html>