<?php

namespace App\Http\Controllers;
use App\Nacion;
use App\Institucional;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class NacionController extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacion = Nacion::orderBy('id_nacion', 'asc')->paginate(3);
         return view ('nacion.index',compact('nacion','objetivos'));
    }


        public function institucional()
    {
        $institucional=Institucional::all();
            return compact('institucional');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('nacion.create', compact('nacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $nacion = Nacion::create($request->all());
         \Session::flash('mensaje', 'Plan de la nacion agregado satisfactoriamente');
        return redirect()->route('nacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nacion=Nacion::find($id);
        return view ('nacion.show',compact('nacion'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $nacion=Nacion::find($id);
       return view ('nacion.edit',compact('nacion'));
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
         $nacion=Nacion::find($id)->update($request->all());
         \Session::flash('mensaje', 'Plan de la nacion actualizado satisfactoriamente');
        return redirect()->route('nacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nacion = Nacion::find($id);
        $nacion->delete();
        \Session::flash('mensaje', 'Plan de la nación ha sido eliminado satisfactoriamente');
        return redirect()->route('nacion.index');
    }
}
