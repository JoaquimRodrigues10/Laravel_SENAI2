<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Livros</title>
</head>
<style>
    table{
        text-align: center
    }
</style>
<body>
    <h1>Relatório de Livros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AUTOR</th>
                <th>CUSTO</th>
                <th>PRECO VENDA</th>
                <th>DESCRIÇÃO</th>
                <th>ID EDITORA</th>
                <th>EDITORA</th>
                <th>NOME</th>
                <th>CNPJ</th>
                <th>PAIS</th>
                <th>CIDADE</th>
                <th>ATUALIZAR</th>
                <th>DELETAR</th>
            </tr>
        </thead>
        <tbody>
            @forelse($livros as $livro);
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->custo }}</td>
                    <td>{{ $livro->preco_venda }}</td>
                    <td>{{ $livro->detalhe->descricao ?? '' }}</td>
                    <td>{{ $livro->editora?->id }}</td>
                    <td>{{ $livro->editora?->nome }}</td>
                    <td>{{ $livro->setor?->cnpj}}</td>
                    <td>{{ $livro->setor?->pais}}</td>
                    <td>{{ $livro->setor?->cidade}}</td>
                    <td>
                        <a href="{{route('livro.atualizar', $livro->ID)}}">Atualizar</a>
                    </td>
                    <td>
                        <form action="{{ route('livro.deletar', $livro->ID)}}" method="POST" onsubmit="return confirm('Deseja realmente excluir')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>

                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">Nenhum LIVRO encontrado</td> 
                </tr>
            @endforelse
        </tbody>
    </table>
    
</body>
</html>