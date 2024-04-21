<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Página Inicial</h1>
    <div>
        <a href="{{ route('selecionar_alunos') }}"><button>Selecionar Alunos</button></a>
        <a href="{{ route('professor.create') }}"><button>Inserir Professores</button></a>
        <a href="{{ route('curso.index') }}"><button>Atualizar Informações dos Cursos</button></a>
        <a href="{{ route('materia.index') }}"><button>Deletar Matérias</button></a>
    </div>
</body>
</html>
