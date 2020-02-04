<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;
use App\helpers\StoredProcedure;

class StoreController extends Controller
{
    public function StoreProcedureEntes(StoredProcedure $sp)
    {

        $parametros=
            [
            'descripcion'=>"corpovenC",
            'usuario'=>"cemedina",
            ];
        {
            $result=$sp->execute('FLOBA.FLSP_INS_ENTES', $parametros);
            //return $result;
            dd($result);
        }
    }

    public function StoreProcedureFuncionarios(StoredProcedure $sp){



        $parametros = [
            'nombres'  => 'tes',
            'apellidos'=>'prueba',
            'cedula'=>123456,
            'id_ente'=>1,
            'p_id_tipo_funcionario'=>1,
            'telf_mov'=>1234567,
            'telf_local'=>128569874,
            'observaciones'=>'prueba',
            'usuario'=>'dramirez',


        ];

        $parametros=$this->validate($parametros,[
            'nombres'  => 'required|string',
            'apellidos'=>'prueba',
            'cedula'=>123456,
            'id_ente'=>1,
            'p_id_tipo_funcionario'=>1,
            'telf_mov'=>1234567,
            'telf_local'=>128569874,
            'observaciones'=>'prueba',
            'usuario'=>'dramirez',
        ]);

        {
            $result=$sp->execute('FLOBA.FLSP_INS_FUNCIONARIOS', $bindings);
            dd($result);
        }

    }















   /* public function VerBitacoras()
    {
        dd(App\Bitacoras::all());
    }*/
}