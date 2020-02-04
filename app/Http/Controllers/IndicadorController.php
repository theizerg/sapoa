<?php

namespace App\Http\Controllers;
use App\Indicadores;
use App\Proyecto;
use App\Objetivo;
use Illuminate\Http\Request;


class IndicadorController extends Controller
{
   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicadores = Indicadores::orderBy('id_indicadores', 'asc')->paginate(5);
         return view ('indicadores.index', compact('indicadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj=\Session::get('objetivo');


      if(empty (  $obj )){

       return redirect()->route('objetivo.create');
      } else{

        $objetivos=\Session::get('objetivo');
        //dd($indicadores);
        
        return view ('indicadores.create',compact('objetivos','obj'));
        }
        
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indicadores = Indicadores::create($request->all());
          \Session::push('indicadores',$indicadores);
         \Session::flash('mensaje', 'Meta agregada satisfactoriamente');
        return redirect()->route('indicadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $indicadores=Indicadores::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('indicadores.show',compact('indicadores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $objetivos=\Session::get('objetivo');
        $indicadores=Indicadores::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('indicadores.edit',compact('indicadores','objetivos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $indicadore=Indicadores::find($id)->update($request->all());
         \Session::flash('mensaje', 'Indicador Actualizado satisfactoriamente');
        return redirect()->route('indicadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $indicadores = Indicadores::find($id);
        $indicadores->delete();
        \Session::flash('mensaje', 'Indicadores eliminados satisfactoriamente');
        return redirect()->route('indicadores.index');
    }
}
