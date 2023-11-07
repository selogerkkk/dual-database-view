<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class viewtables extends Controller
{
    public function listarDados()
    {
        $dadosTabela1 = DB::connection('mysql')->table('tabeladeteste')->get();
        $dadosTabela2 = DB::connection('mysql_secondary')->table('tabelacliente')->get();

        $colunasTabela1 = DB::connection('mysql')->getSchemaBuilder()->getColumnListing('tabeladeteste');
        $colunasTabela2 = DB::connection('mysql_secondary')->getSchemaBuilder()->getColumnListing('tabelacliente');

        $colunasQueNaoExistemEmTabela1 = array_diff($colunasTabela2, $colunasTabela1);
        $colunasQueNaoExistemEmTabela2 = array_diff($colunasTabela1, $colunasTabela2);

        return view('viewtables', compact(
            'dadosTabela1',
            'dadosTabela2',
            'colunasQueNaoExistemEmTabela1',
            'colunasQueNaoExistemEmTabela2'
        ));
    }
}
