<div>
    <h2>Tabela 1</h2>
    @if ($dadosTabela1->count() > 0)
        <table>
            <thead>
                <tr>
                    @foreach ($dadosTabela1[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($dadosTabela1 as $row)
                    <tr>
                        @foreach ($row as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum dado disponível na Tabela 1.</p>
    @endif

    <h2>Tabela 2</h2>
    @if ($dadosTabela2->count() > 0)
        <table>
            <thead>
                <tr>
                    @foreach ($dadosTabela2[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($dadosTabela2 as $row)
                    <tr>
                        @foreach ($row as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum dado disponível na Tabela 1.</p>
    @endif

    <h2>Colunas que não existem em Tabela 1:</h2>
    <ul>
        @foreach ($colunasQueNaoExistemEmTabela1 as $coluna)
            <li>{{ $coluna }}</li>
        @endforeach
    </ul>

    <h2>Colunas que não existem em Tabela 2:</h2>
    <ul>
        @foreach ($colunasQueNaoExistemEmTabela2 as $coluna)
            <li>{{ $coluna }}</li>
        @endforeach
    </ul>
</div>
