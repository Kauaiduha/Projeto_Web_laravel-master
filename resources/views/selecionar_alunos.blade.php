<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Alunos</title>
</head>
<body>
    <h1>Selecionar Alunos</h1>
    <p>Aqui estão os alunos:</p>
    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }}</li> <!-- Supondo que o nome do aluno seja o campo a ser exibido -->
        @endforeach
    </ul>
</body>
</html>
