<!DOCTYPE html>
<html lang="{{ str_replace('_', '-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrados Usuários</title>
</head>
<body>
    <h1>Cadastro Usuarios</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('aluno.salvar') }}" method="POST">
        @csrf
        <label fot="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..."
            require value="{{ old('nome') }}"
            >

            <br><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Email..." required value="{{ old('email')}}"
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