<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <span>Livros Disponívies</span>
                                </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nome do Livro</th>
                                                    <th>Editora</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($livros as $livro)
                                                    <tr>
                                                        <td>{{ $livro->titulo }}</td>
                                                        <td>{{ $livro->editora }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>