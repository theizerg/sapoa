<?php

namespace App\Http\Controllers;
use App\Coordinacion;
use App\Gerencia;
use Illuminate\Http\Request;



class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    



    public function index()
    {
        $coordinacion = Coordinacion::with(['gerencia'])->paginate(5);                       
        return view ('coordinacion.index',compact('coordinacion'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $gerencia=Gerencia::all();
        return view ('coordinacion.create',compact('gerencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coordinacion= Coordinacion::create($request->all());
        
        \Session::flash('mensaje', 'Supuestos de iniciativa creada satisfactoriamente');
        return redirect()->route('coordinacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $coordinacion=Coordinacion::with(['gerencia'])->find($id);
        return view ('coordinacion.show',compact('coordinacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $coordinacion=Coordinacion::find($id);
      return view ('coordinacion.edit', compact('coordinacion'));
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
        $coordinacion=Coordinacion::find($id)->update($request->all());
        return redirect()->route('coordinacion.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordinacion = Coordinacion::find($id);
        $coordinacion->delete();
        return back()->with('info','Coordinación eliminada correctamente');
    }
}
