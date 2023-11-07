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

        return view('viewtables', compact('dadosTabela1', 'dadosTabela2'));
    }
}
