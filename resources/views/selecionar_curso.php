<form action="{{ route('selecionar_curso') }}" method="POST">
    @csrf
    <label for="curso">Curso:</label><br>
    <select id="curso" name="curso" required>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
        @endforeach
    </select><br><br>

    <input type="submit" value="Selecionar Curso">
</form>
