@include('layouts.header')

<body>
    @include('layouts.menuperfil')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>
    @endif

    <main class="m-5">

        <h1>meus pets</h1>

        <div class="row">

        @foreach ($pets as $pet)
            <div class="col-md-4">
                <div><img src="{{ $pet->imagem }}" style="width:200px"></div>

                <div>
                    <button>teste1</button>
                </div>
                <div>
                    <button>teste2</button>
                </div>
                <div>
                    <button>teste3</button>
                </div>
                <div>
                    <button>teste4</button>
                </div>
                    
            </div>
        @endforeach

        <div class="row">
            {{ $pets->links() }}

        </div>
    </div>


    </main>
