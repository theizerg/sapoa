<?php

namespace App\Http\Controllers;
use App\Proyecto;
use Illuminate\Http\Request;


class ProyectoController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto =Proyecto::orderBy('id_proyecto', 'asc')->paginate(5);
          return view('proyecto.index', compact('proyecto'));

    }

        public function gerencias(Request $request)
    {
            
            $proyecto = Proyecto::find($request->proyecto);
            $gerencias = $proyecto->gerencia;
            return compact('gerencias');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Proyecto::create([
          'nb_proyecto'=> $request ['nb_proyecto'],
     ]);
     return redirect()->route('proyecto.index')->with('info','Proyecto actualizado correctamente'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto=Proyecto::find($id);
        return view ('proyecto.show',compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto= Proyecto::Find($id);
        return view ('proyecto.edit',compact('proyecto'));
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
         $validatedData = $request->validate([
        'nb_proyecto' => 'required',
         ]);
         $proyecto=Proyecto::find($id)->update($request->all());
        return redirect()->route('proyecto.index')->with('info','Proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return back()->with('info','Proyecto eliminado correctamente');
    }
}
