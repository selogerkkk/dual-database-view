<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class viewtables extends Controller
{
    public function listarDados()
    {

        $nomeTabela1 = 'bancoprincipal';
        $dadosTabela1 = DB::connection('mysql')->table($nomeTabela1)->get();
        $colunasTabela1 = DB::connection('mysql')->getSchemaBuilder()->getColumnListing($nomeTabela1);

        $nomeTabela2 = 'tabelacliente';
        $dadosTabela2 = DB::connection('mysql_secondary')->table($nomeTabela2)->get();
        $colunasTabela2 = DB::connection('mysql_secondary')->getSchemaBuilder()->getColumnListing($nomeTabela2);

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
