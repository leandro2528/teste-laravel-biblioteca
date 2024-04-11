<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Livros</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="d-flex small text-white stretched-link" href="">
                                        <h4>Total de livros:</h4>
                                        <h5>0{{ $totalLivros }}</h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Gêneros</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="d-flex small text-white stretched-link" href="{{ route('generos-index') }}">
                                        <h4>Total de gêneros:</h4>
                                        <h5> 0{{ $totalTb_generos }} </h5>
                                    </a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Livros Disponívies</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ route('disponivels-index') }}">0{{ $totalLivros }}</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Livros Alugados</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col">
                            <div class="card-body">
                                <p>Livros Alugados: {{ $livrosAlugados }}</p>
                                <p>Livros Reservados: {{ $livrosReservados }}</p>
                                <p>Livros Disponíveis: {{ $livrosDisponiveis }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                        <span>Lista de gênero</span>
                                        <span>
                                            <a class="btn btn-info btn-sm ms-4" href="{{ route('generos-create') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                </svg>
                                            </a>
                                        </span>
                                </div>
                                <div class="card-body">
                                    @if(count($tb_generos))
                                        <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tb_generos as $tb_genero)
                                                    <tr>
                                                        <td>{{ $tb_genero->id }}</td>
                                                        <td>{{ $tb_genero->nome }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <div class="alert alert-info">
                                                Não exitem GÊNEROS cadastrados nesta tabela.
                                            </div>
                                    @endif

                                    {{ $tb_generos->links() }}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
