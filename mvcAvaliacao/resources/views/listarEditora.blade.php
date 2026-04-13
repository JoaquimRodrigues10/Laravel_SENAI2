<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Editora</title>
</head>
<style>
    table{
        text-align: center
    }
</style>
<body>
    <h1>Relatório de Editora</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CNPJ</th>
                <th>PAIS</th>
                <th>CIDADE</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($editoras as $editora)
                <tr>
                    <td>{{ $editora->id }}</td>
                    <td>{{ $editora->nome }}</td>
                    <td>{{ $editora->cnpj }}</td>
                    <td>{{ $editora->pais }}</td>
                    <td>{{ $editora->cidade }}</td>


                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum LIVRO encontrado</td> 
                </tr>
            @endforelse
        </tbody>
    </table>
    
</body>
</html>