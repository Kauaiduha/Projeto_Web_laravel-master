<form action="{{ route('update', ['curso' => $curso->id]) }}" method="POST">
    @csrf
    <!-- Campos de edição do curso -->
    <label for="rc">RC:</label><br>
    <input type="number" id="rc" name="rc" value="{{ $curso->rc }}" required><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value="{{ $curso->nome }}" required><br><br>
    
    <input type="submit" value="Atualizar Curso">
</form>
