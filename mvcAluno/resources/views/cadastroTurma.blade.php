<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrados das Salas</title>
</head>
<body>
    <h1>Cadastro da Sala</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('turma.salvar') }}" method="POST">
        @csrf
        <label for="numSala">numSala: </label>
        <input type="number" name="numSala" id="numSala" placeholder="Numero da sala"
            require value="{{ old('nome') }}"
            >

            <br><br>
            <label for="serie">serie: </label>
            <input type="text" name="serie" id="serie" placeholder="Serie..." required value="{{ old('email')}}"
            >

            <button type="submit">Cadastrar</button>
</form>

    @if($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors ->all() as $erro)
            <li>{{ $erro}}</li>
                
            @endforeach
        </ul>
    </div>
    @endif


</body>
</html>