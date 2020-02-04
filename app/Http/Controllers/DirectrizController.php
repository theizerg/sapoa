<?php

namespace App\Http\Controllers;
use App\Objetivo;
use App\Nacion;
use App\Estrategico;
use App\Institucional;
use App\Directriz;
use Illuminate\Http\Request;



class DirectrizController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $directriz=Directriz::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','objetivo'])->paginate(5);
      
      
      return view ('directriz.index', compact('directriz'));
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
       
        $nacion=Nacion::all();
        $institucional=Institucional::all();
        $estrategico=Estrategico::all();
        return view ('directriz.create',compact('directriz','objetivos','nacion','institucional','estrategico','obj'));
        //dd($directriz);
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

            'id_estrategico'=>'required',
            'id_institucional'=>'required',
            'id_nacion'=>'required',
            'id_objetivo'=>'required',

  ]);

    $directriz= Directriz::create($request->all());
        \Session::push('directriz',$directriz);
        \Session::flash('mensaje', 'Directriz creada satisfactoriamente');
        return redirect()->route('directriz.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $directriz=Directriz::find($id);
        return view ('directriz.show', compact('directriz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $directriz=\Session::get('directriz');
       $objetivos=\Session::get('objetivo');
       $obj=\Session::get('objetivo');
        $direct=Directriz::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
        return view ('directriz.edit', compact('direct' ,'directriz','objetivos','obj'));  
        //dd($directriz);
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

            'id_estrategico'=>'required',
            'id_institucional'=>'required',
            'id_nacion'=>'required',
            'id_objetivo'=>'required',

  ]);

        $directriz=Directriz::find($id)->update($request->all());
        \Session::flash('mensaje', 'Directriz Actualizada satisfactoriamente');
       return redirect()->route('directriz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $directriz = Directriz::find($id);
        $directriz->delete();
        \Session::flash('mensaje', 'Directriz eliminada satisfactoriamente');
        return redirect()->route('directriz.index');
    }
}
