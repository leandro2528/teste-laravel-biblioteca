<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(session('warning'))
                        <div id="warningAlert" class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <script>
                        const warningAlert = document.getElementById('warningAlert');
                        setTimeout(() => {
                            warningAlert.remove();
                        }, 2000);
                    </script>

                    @if(session('success'))
                        <div id="createAlert" class="alert alert-success">
                            {{ session('success') }}
                        </div>  
                    @endif  
                    <script>
                        const createAlert = document.getElementById('createAlert');
                        setTimeout(() => {
                            createAlert.remove();
                        }, 2000);
                    </script>

                    @if(session('danger'))
                        <div id="deleteAlert" class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                    @endif

                    <script>
                        const deleteAlert = document.getElementById('deleteAlert');
                            setTimeout(() => {
                                deleteAlert.remove();
                            }, 2000);
                    </script>

                    <div class="row my-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                        <span>Lista de Livros</span>
                                        <span>
                                            <a class="btn btn-primary btn-sm ms-4" href="{{ route('livros-create') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                </svg>
                                            </a>
                                        </span>
                                </div>
                                <div class="card-body">
                                    @if(count($livros))
                                    <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Titulo</th>
                                                <th>Editora</th>
                                                <th>Gênero</th>
                                                <th>Ano de Lançamento</th>
                                                <th>Estado</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($livros as $livro)
                                                <tr>
                                                    <td>{{ $livro->id }}</td>
                                                    <td>{{ $livro->titulo }}</td>
                                                    <td>{{ $livro->editora }}</td>
                                                    <td>{{ $livro->tb_genero->nome }}</td>
                                                    <td>{{ $livro->ano_de_lancamento }}</td>
                                                    <td>{{ $livro->estado }}</td>
                                                    <td class="d-flex">
                                                        <a class="btn btn-warning btn-sm" href="{{ route('livros-edit', ['id'=>$livro->id]) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                                                </svg>
                                                        </a>
                                                        <form action="{{ route('livros-destroy', ['id'=>$livro->id]) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm ms-2" id="deleteButtonLivro">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                </svg>
                                                                <script>
                                                                    document.getElementById('deleteButtonLivro').addEventListener('click', function(event) {
                                                                        if(confirm('Deseja excluir este Livro?')) {
                                                                            return true;
                                                                        } else {
                                                                            event.preventDefault(); 
                                                                            return false;
                                                                        }
                                                                    });
                                                                </script>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else 
                                        <div class="alert alert-info">
                                            Não exite livros cadastrado nesta tabela.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
                            <p>Livros Alugados: {{ $livrosAlugados }}</p>
                            <p>Livros Reservados: {{ $livrosReservados }}</p>
                            <p>Livros Disponíveis: {{ $livrosDisponiveis }}</p>
                        </div>

</x-app-layout>