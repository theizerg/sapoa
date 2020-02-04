<?php

namespace App\Http\Controllers;
use App\Institucional;
use App\Estrategico;
use Illuminate\Http\Request;



class InstitucionalController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institucional=Institucional::orderBy('id_institucional', 'asc')->paginate(3);
        return view ('institucional.index', compact('institucional'));
    }
      public function estrategicos($id_institucional,$id_nacion){

        $estrategico=Estrategico::get()
        ->where('id_institucional', '=',$id_institucional)
        ->where('id_nacion', '=',$id_nacion);
        return compact('estrategico');
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('institucional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institucional = Institucional::create($request->all());
         \Session::flash('mensaje', 'Plan estratégico institucional ha sido agregado satisfactoriamente');
        return redirect()->route('institucional.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $institucional=Institucional::find($id);
     return view ('institucional.show',compact('institucional'));
     //dd( $institucional);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucional=Institucional::find($id);
        return view ('institucional.edit',compact('institucional'));
        
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
           $institucional=Institucional::find($id)->update($request->all());
         \Session::flash('mensaje', 'Plan estratégico institucional actualizado satisfactoriamente');
        return redirect()->route('institucional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucional = Institucional::find($id);
        $institucional->delete();
        \Session::flash('mensaje', 'Plan estratéfico institucional ha sido eliminado satisfactoriamente');
        return redirect()->route('institucional.index');
    }
}
