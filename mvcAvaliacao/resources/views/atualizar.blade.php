<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Livro</title>
</head>
<body>
    <h1>Atualizar Livro</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('livro.update', $livro->id) }}" method="POST" >
        @csrf
        @method('PUT')

         <input type="text" name="nome" value="{{ old('nome', $livro->nome) }}" required>

        <input type="text" name="autor" value="{{ old('autor', $livro->autor) }}" required>

      <input type="text" name="descricao" value="{{ old('descricao', $livro->detalhe?->descricao) }}" required>

        <input type="number" name="numero_pagina" value="{{ old('numero_pagina', $livro->detalhe?->numero_paginas) }}" required>

        <input type="date" name="publicacao" value="{{ old('publicacao', $livro->detalhe?->publicacao) }}" required>

        <input type="number" name="custo" value="{{ old('custo', $livro->detalhe?->custo) }}" required>

        <input type="number" name="preco" value="{{ old('preco', $livro->detalhe?->preco) }}" required>

        <input type="number" name="imposto" value="{{ old('imposto', $livro->detalhe?->imposto }}" required>
         
        

        <button type="submit">Atualizar</button>
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>