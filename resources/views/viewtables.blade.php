<div>
    <h2>Tabela 1</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dadosTabela1 as $row)
                <tr>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->idade }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->sexo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <h2>Tabela 2</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dadosTabela2 as $row)
                <tr>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->idade }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->sexo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
