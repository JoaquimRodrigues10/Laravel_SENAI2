<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h1>Cadastro de Livros</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{ route('livros.salvar') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Livro..." require value="{{old('nome')}}">
        <br><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" placeholder="Autor..." require value="{{old('autor')}}">
        <br><br>

        <label for="descricao">Descrição do Livro:</label>
        <input type="textarea" name="descricao" id="descricao" placeholder="Descrição do Livro..." require value="{{old('descricao')}}">
        <br><br>

        <label for="numero_paginas">Número páginas:</label>
        <input type="number" name="numero_paginas" id="numero_paginas" placeholder="Numero Paginas..." require value="{{old('numero_paginas')}}">
        <br><br>

        <label for="descricao">Descrição do Produto:</label>
        <input type="textarea" name="descricao" id="descricao" placeholder="Descrição do Produto..." require value="{{old('descricao')}}">
        <br><br>

        <label for="data_publicacao">Data Publicação:</label>
        <input type="date" name="data_publicacao" id="data_publicacao" placeholder="Data de Publicaçao..." require value="{{old('data_publicacao')}}">
        <br><br>

        <label for="custo">Custo do Livro:</label>
        <input type="number" name="custo" id="custo" placeholder="Custo do Livro..." require value="{{old('custo')}}">
        <br><br>

        <label for="preco">Preço do Livro:</label>
        <input type="number" name="preco" id="preco" placeholder="preco do Livro..." require value="{{old('preco')}}">
        <br><br>

        <label for="imposto">Imposto do Livro:</label>
        <input type="number" name="imposto" id="imposto" placeholder="Imposto do Livro..." require value="{{old('imposto')}}">
        <br><br>

        <label for="editora_id">Editora:</label>
        <select name="editora_id" id="editora_id" required>
            <option value="" disabled selected>Selecione uma editora</option>

            @foreach ($editoras as $editora)
                <option value="{{ $editora->id }}">
                    Editora - {{ $editora->nome }} - {{ $editora->cnpj }} - {{ $editora->pais }} - {{ $editora->cidade}}
                </option>
            @endforeach
        </select>
        
        <input type="submit" value="Cadastrar">
    </form>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>

        </div>
    @endif
</body>
</html>