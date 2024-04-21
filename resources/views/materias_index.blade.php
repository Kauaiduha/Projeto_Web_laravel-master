<!-- materias_index.blade.php -->

@if ($materias->isEmpty())
    <p>Não há matérias cadastradas.</p>
@else
    <h1>Lista de Matérias</h1>
    <ul>
        @foreach ($materias as $materia)
            <li>
                {{ $materia->nome }}
                <form action="{{ route('materia.destroy', $materia->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('welcome') }}">Voltar para a página inicial</a>
@endif
