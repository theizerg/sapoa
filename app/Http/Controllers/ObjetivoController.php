<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Objetivo;
use App\Proyecto;
use App\Directriz;
use App\Nacion;
use DB;
use Illuminate\Support\Facades\Session;



class ObjetivoController extends Controller
{
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $objetivos=Session::get('objetivo');
        $objetivo = Objetivo::orderBy('id_objetivo', 'asc')->paginate(5);
         return view ('objetivo.index',compact('objetivo','objetivos'));
            //return   $gerencia->proyecto->nb_proyecto;
    }
    
    public function objetivoNacion ($id_objetivo)
        {
            $nacion=Nacion::all();
            return compact('nacion');
        }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $proyecto=Proyecto::All();
    
        return view ('objetivo.create',compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
     
        $objetivo = Objetivo::create($request->all());
         \Session::push('objetivo',$objetivo);
         \Session::flash('mensaje', 'Objetivo agregado satisfactoriamente');
        return redirect()->route('objetivo.index');
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objetivo=Objetivo::with(['proyecto','gerencia','coordinacion'])->find($id);
        return view ('objetivo.show',compact('objetivo'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objetivo=Objetivo::with(['proyecto','gerencia','coordinacion'])->find($id);
        $objetivos=Session::get('objetivo');
        return view ('objetivo.edit',compact('objetivo','objetivos'));
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
        $objetivo=Objetivo::find($id)->update($request->all());
    if ($objetivo) {
         \Session::flash('mensaje', 'Objetivo Actualizado satisfactoriamente');
        return redirect()->route('objetivo.index');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objetivo = Objetivo::find($id);
        $objetivo->delete();
        \Session::flash('mensaje', 'Objetivo eliminado satisfactoriamente');
        return redirect()->route('objetivo.index');
    }
}
