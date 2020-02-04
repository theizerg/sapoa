<?php

namespace App\Http\Controllers;
use App\Proyecto;
use App\Meta;
use App\Objetivo;
use Illuminate\Http\Request;

##########################################################
#Middleware para determinar los permisos de cada usuario##
##########################################################

class MetaController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetivos=\Session::get('objetivo');
        $meta = Meta::orderBy('id_meta', 'asc')->paginate(5);
         return view ('meta.index',compact('meta','objetivos'));
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
          return view ('meta.create',compact('objetivos','obj'));  

      }



       //$objetivos=\Session::get('objetivo');
       //dd( $objetivos);
       //
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $meta = Meta::create($request->all());
         \Session::flash('mensaje', 'Meta agregada satisfactoriamente');
        return redirect()->route('metas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj=\Session::get('objetivo');
        $metas=Meta::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('meta.show',compact('metas','obj'));
        //dd($metas);
        
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
        $metas=Meta::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('meta.edit',compact('metas','objetivos'));
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
    $meta=Meta::find($id)->update($request->all());
         \Session::flash('mensaje', 'Meta Actualizada satisfactoriamente');
        return redirect()->route('metas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meta = Meta::find($id);
        $meta->delete();
        \Session::flash('mensaje', 'Meta eliminada satisfactoriamente');
        return redirect()->route('metas.index');
    }
}
