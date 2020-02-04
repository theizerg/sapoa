<?php

namespace App\Http\Controllers;
use App\Iniciativa;

use Illuminate\Http\Request;



class IniciativaController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iniciativa=\Session::get('iniciativa');
        $iniciativas=Iniciativa::with(['nacion','institucional','objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->paginate(5);
        return view ('iniciativa.index',compact('iniciativas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
    $directriz=\Session::get('directriz');
    $obj=\Session::get('objetivo');


      if(empty (  $obj )){
        
       return redirect()->route('objetivo.create');
      } elseif (empty($directriz)){
        return redirect()->route('directriz.create');

        } else{
            $objetivos=\Session::get('objetivo');
        
        //dd($directriz);
        return view ('iniciativa.create', compact('directriz','objetivos','obj'));

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

            
            'id_institucional'=>'required',
            'id_nacion'=>'required',
            'id_objetivo'=>'required',
            'tx_iniciativa'=>'required',

  ]);
        $iniciativa= Iniciativa::create($request->all());
        \Session::push('iniciativa',$iniciativa);
        \Session::flash('mensaje', 'Iniciativa creada satisfactoriamente');
        return redirect()->route('iniciativas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iniciativas=Iniciativa::with(['nacion','institucional','objetivo','objetivo','objetivo.gerencia','objetivo.coordinacion'])->find($id);
       return view ('iniciativa.show',compact('iniciativas'));
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
          $iniciativas=Iniciativa::with(['nacion','institucional','objetivo','objetivo.gerencia','objetivo.coordinacion'])->find($id);
       return view ('iniciativa.edit',compact('iniciativas','objetivos'));
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

            'tx_iniciativa'=>'required',

  ]);
         $iniciativa=Iniciativa::find($id)->update($request->all());
        \Session::flash('mensaje', 'Iniciativa Actualizada satisfactoriamente');
       return redirect()->route('iniciativas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iniciativas = Iniciativa::find($id);
        $iniciativas->delete();
        \Session::flash('mensaje', 'Iniciativa eliminada satisfactoriamente');
        return redirect()->route('iniciativas.index');
    }
}
