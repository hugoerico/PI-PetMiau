@include('layouts.header')
<body>
    @include('layouts.menuperfil')

    @if (session()->has('sucesso'))
        
    <div>
        {{session()->get('sucesso')}}

    </div>
 @endif

<main class="m-5">
    <div>
        <h2>foto</h2>
        <img src="{{ $user->imagem }}" style="width:100px">

    </div>

    <div>
       <h2>nome</h2>
        <div class="row">
            {{ $user->name }}
        </div>

        <div>
            <button> atualizar perfil</button>
        </div>

    </div>

    <div>
        <h2>endereço</h2>
        
        <div class="row">
            <label for="">cep</label>
            {{ $endereco->cep }}
        </div>

        <div class="row">
            <label for="">rua</label>
            {{ $endereco->rua }}
        </div>

        <div class="row">
            <label for="">numero</label>
            {{ $endereco->numero }}
        </div>

        <div class="row">
            <label for="">complemento</label>
            {{ $endereco->complemento }}
        </div>

        <div class="row">
            <label for="">bairro</label>
            {{ $endereco->bairro }}
        </div>

        <div class="row">
            <label for="">cidade</label>
            {{ $endereco->cidade }}
        </div>

        <div class="row">
            <label for="">uf</label>
            {{ $endereco->uf }}
        </div>

        <div class="row">
            <label for="">contato</label>
           {{ $endereco->contato }}
        </div>

        <div>
            <button> atualizar contato</button>
        </div>

    </div>
</main>