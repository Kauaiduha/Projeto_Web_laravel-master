<!-- professor_create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Professor</title>
</head>
<body>
    <h1>Criar Professor</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('professor.store') }}" method="POST">
        @csrf
        
        <label for="rp">RP:</label><br>
        <input type="text" id="rp" name="rp" value="{{ old('rp') }}"><br>
        @error('rp')
            <div>{{ $message }}</div>
        @enderror

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}"><br>
        @error('nome')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Criar Professor</button>
    </form>
</body>
</html>
