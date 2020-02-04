<?php

namespace App\Http\Controllers;
use App\Supuesto;
use App\objetivo;
use Illuminate\Http\Request;



class SupuestoController extends Controller
{
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $supuesto = Supuesto::orderBy('id_supuesto', 'asc')->paginate(5);
         return view ('supuesto.index', compact('supuesto'));
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
        
        return view ('supuesto.create',compact('objetivos','obj'));
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
    
        $supuesto= Supuesto::create($request->all());
         \Session::flash('mensaje', 'Supuesto agregado satisfactoriamente');
        return redirect()->route('supuesto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $supuesto=Supuesto::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','objetivo'])->find($id);
         
        return view ('supuesto.show',compact('supuesto'));
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
        $supuesto=Supuesto::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('supuesto.edit',compact('supuesto','objetivos'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supuesto=Supuesto::find($id)->update($request->all());
         \Session::flash('mensaje', 'Supuesto Actualizado satisfactoriamente');
        return redirect()->route('supuesto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supuesto = Supuesto::find($id);
        $supuesto->delete();
        \Session::flash('mensaje', 'Supuesto eliminado satisfactoriamente');
        return redirect()->route('supuesto.index');
    }
}
