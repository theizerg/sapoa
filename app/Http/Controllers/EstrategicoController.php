<?php

namespace App\Http\Controllers;
use App\Estrategico;
use App\Institucional;
use App\Nacion;
use Illuminate\Http\Request;



class EstrategicoController extends Controller
{
     
     

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $estrategico=Estrategico::with(['nacion','institucional'])->paginate(5);
        return view ('estrategico.index', compact('estrategico'));
        //dd($estrategico);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nacion=Nacion::all();
        $institucional=Institucional::all();
        //dd($nacion);
        return view ('estrategico.create',compact('nacion','institucional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estrategico = Estrategico::create($request->all());
         \Session::flash('mensaje', 'Plan estratégico ha sido agregado satisfactoriamente');
        return redirect()->route('estrategico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
     $estrategico=Estrategico::find($id);
     return view ('estrategico.show',compact('estrategico'));
     //dd( $estrategico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $nacion=Nacion::all();
        $institucional=Institucional::all();
        $estrategico=Estrategico::with(['nacion','institucional'])->find($id);
        return view ('estrategico.edit',compact('estrategico','nacion','institucional'));
        
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
            'id_nacion'=>'required',
            'id_institucional'=>'required',
            'tx_institucional'=>'required'
  ]);
        $estrategico=Estrategico::find($id)->update($request->all());
         \Session::flash('mensaje', 'Plan estratégico actualizado satisfactoriamente');
        return redirect()->route('estrategico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estrategico = Estrategico::find($id);
        $estrategico->delete();
        \Session::flash('mensaje', 'Plan estratégico ha sido eliminado satisfactoriamente');
        return redirect()->route('estrategico.index');
    }
}
