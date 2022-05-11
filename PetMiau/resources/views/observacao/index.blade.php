@include('layouts.header')

<body>
    @include('layouts.menu')

    @if (session()->has('sucesso'))
        <div>
            {{ session()->get('sucesso') }}

        </div>

        <head>





        </head>
    @endif
    @if ($abrir =1 )
 @endif       
@if ($abrir =4)
    

        <script type="text/javascript">
            $(window).on('load', function() {
                $('#exampleModalCenter1').modal('show');
            });
        </script>
    @endif

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Novo Comentario
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('observacao.store', $id = $pet_id) }}" method="post">
                        @method('PATCH')
                        @csrf

                        <div class="row">
                            <span class="form-label">Obs</span>
                            <textarea class="form-control" name="texto"></textarea>


                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @if ($observacao = 'true')
                        <form action="{{ route('observacao.update', $observacao) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <label for="" class="form-label">Texto</label>

                            </div>

                            <button type="submit">salvar</button>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                @else
                    <form action="{{ route('observacao.update', $observacao) }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <label for="" class="form-label">Texto</label>
                            <input type="text" name="texto" class="form-control" value="{{ $observacao->texto }}">
                        </div>

                        <button type="submit">salvar</button>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <h1>Lista de produtos</h1>

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
                @foreach ($observacoes as $observacao)
                    <tr>
                        <td>{{ $observacao->id }}</td>
                        <td>{{ $observacao->texto }}</td>
                        <td>{{ $observacao->pet_id }}</td>

                        <td>

                            <a href="{{ Route('observacao.edit', $id = $observacao->id) }}"
                                class="btn btn-sm btn-warning">Editar</a>
                            <form method="POST" action="{{ Route('observacao.destroy', $id = $observacao->id) }}"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onsubmit="return remover()">Apagar</button>
                            </form>

                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#exampleModalCenter1">
                                Editar
                            </button>


                        </td>


                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>
