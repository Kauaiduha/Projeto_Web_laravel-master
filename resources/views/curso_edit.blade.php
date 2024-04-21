<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Curso</title>
</head>
<body>

<h1>Edit Curso</h1>

<form action="{{ route('cursos.update', ['curso' => $curso->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $curso->nome }}">
    <br><br>
    
    <label for="rc">RC (Registro de Curso):</label>
    <input type="text" id="rc" name="rc" value="{{ $curso->rc }}">
    <br><br>

    <button type="submit">Salvar</button>
</form>

</body>
</html>
