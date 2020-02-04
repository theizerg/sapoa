<?php

namespace App\Http\Controllers;
use App\Diccionario;
use Illuminate\Http\Request;



class DiccionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    

    public function index()
    {
        $diccionario=Diccionario::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','indicadores','objetivo'])->paginate(3);
        
        
        return view ('diccionario.index',compact('diccionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $obj=\Session::get('objetivo');
        $indicadores=\Session::get('indicadores');

      if(empty (  $obj )){

       
       return redirect()->route('objetivo.create');
      } 
      elseif (empty( $indicadores)){ 

        return redirect()->route('indicadores.create');
    }
        else{

              $objetivos=\Session::get('objetivo');
       

         return view ('diccionario.create',compact('objetivos','indicadores','obj'));

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
         
        request()->validate([

            'id_objetivo'=>'required',
            'id_indicadores'=>'required',
            'tx_tipo'=>'required',
            'tx_descripcion'=>'required',
           
  ]);

        $diccionario=Diccionario::create($request->all());
        \Session::flash('mensaje', 'Diccionario de indicadores creado satisfactoriamente');
        
        return redirect()->route('diccionario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diccionario=Diccionario::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','indicadores'])->find($id);
        //dd($diccionario);
        return view ('diccionario.show',compact('diccionario'));
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
        $obj=\Session::get('objetivo');
        $indicadores=\Session::get('indicadores');
       $diccionario=Diccionario::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','indicadores'])->find($id);
        //dd($diccionario);
        return view ('diccionario.edit',compact('diccionario','objetivos','obj','indicadores'));
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
                 
        request()->validate([

            'id_objetivo'=>'required',
            'id_indicadores'=>'required',
            'tx_tipo'=>'required',
            'tx_descripcion'=>'required',
           
  ]);

        $Diccionario = Diccionario::find($id);
        $Diccionario->update($request->all());

         \Session::flash('mensaje', 'Diccionario de indicadores actualizado satisfactoriamente');

         return redirect()->route('diccionario.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diccionario = Diccionario::find($id);
        $diccionario->delete();
        \Session::flash('mensaje', 'Diccionario de indicadores eliminado satisfactoriamente');
        return redirect()->route('diccionario.index');
    }
}
