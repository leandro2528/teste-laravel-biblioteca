<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    <div class="row my-2">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                        <span>Atualizar de Livros</span>
                                        <span>
                                            <a class="btn btn-secondary btn-sm ms-4" href="{{ route('livros-index') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
                                                </svg>
                                            </a>
                                        </span>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('livros-update', ['id'=>$livros->id]) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group my-3">
                                            <label for="">Titulo</label>
                                            <input type="text" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $livros->titulo }}" name="titulo">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="">Editora</label>
                                            <input type="text" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $livros->editora }}"  name="editora">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="">Gênero</label>
                                            <select class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="genero_id" id="genero_id">
                                                <option value="select">-- Selecione um gênero --</option>
                                                @foreach($tb_generos as $tb_genero)
                                                    <option value="{{ $tb_genero->id }}"{{ $livros->genero_id == $tb_genero->id ? 'selected' : '' }}>{{ $tb_genero->nome }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="">Ano de Lançamento</label>
                                            <input type="text" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"value="{{ $livros->ano_de_lancamento }}"  name="ano_de_lancamento">
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="">Estado</label>
                                            <select class="block appearance-none w-full bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="estado" id="estado">
                                                <option value="disponivel" {{ $livros->estado == 'disponivel' ? 'selected' : '' }}>Disponível</option>
                                                <option value="reservado" {{ $livros->estado == 'reservado' ? 'selected' : '' }}>Reservado</option>
                                                <option value="alugado" {{ $livros->estado == 'alugado' ? 'selected' : '' }}>Alugado</option>
                                            </select>
                                        </div>

                                        <div class="form-group my-3">
                                            <input type="submit" class="btn btn-warning btn-sm" value="Atualizar">
                                        </div>
                                    </form>  
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>