<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                    
                    </div>
                    
                    <div class="row my-2">
                        <div class="col">
                            <div class="card">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    <span>Atualizar gênero</span>
                                    <span>
                                        <a class="btn btn-secondary btn-sm ms-4" href="{{ route('generos-index') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                                            </svg>
                                        </a>
                                    </span>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('generos-update', ['id'=>$tb_generos->id]) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group my-3">
                                        <label for="">Nome</label>
                                        <input type="text" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ $tb_generos->nome }}" name="nome">
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
    </div>

</x-app-layout>
