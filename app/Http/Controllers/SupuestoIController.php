<?php

namespace App\Http\Controllers;
use App\Iniciativa;
use App\SupuestosI;
use Illuminate\Http\Request;



class SupuestoIController extends Controller
{
     

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supuestoI=\Session::get('supuestoI'); 
        $SupuestoI=SupuestosI::paginate(5);
         return view ('supuestoI.index',compact('SupuestoI','supuestoI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         $obj=\Session::get('objetivo');
          $iniciativa=\Session::get('iniciativa');

      if(empty (  $obj )){
        
       return redirect()->route('objetivo.create');
      } elseif (empty ($iniciativa)) {

          return redirect()->route('iniciativas.create');
      }

        else{  
       
        $objetivos=\Session::get('objetivo');
        return view ('supuestoI.create',compact('objetivos','iniciativa','obj'));
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

            
            'id_iniciativa'=>'required',
            'id_objetivo'=>'required',
            'tx_supuesto_iniciativa'=>'required',

  ]);
        $supuestoI= SupuestosI::create($request->all());
        \Session::push('supuestoI',$supuestoI);
        \Session::flash('mensaje', 'Supuestos de iniciativa creada satisfactoriamente');
        return redirect()->route('supuestoI.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $SupuestoI=SupuestosI::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','objetivo','iniciativa'])->find($id);
        return view ('supuestoI.show', compact('SupuestoI'));
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
       $SupuestoI=SupuestosI::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion'])->find($id);
       $iniciativa=\Session::get('iniciativa');
       //dd($iniciativa);
        return view ('supuestoI.edit', compact('SupuestoI','objetivos','iniciativa')); 
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

            
            'id_iniciativa'=>'required',
            
            'tx_supuesto_iniciativa'=>'required',

  ]);
        $supuesto=SupuestosI::find($id)->update($request->all());
        \Session::flash('mensaje', 'Supuestos de iniciativa creada satisfactoriamente');
        return redirect()->route('supuestoI.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supuestoI = SupuestosI::find($id);
        $supuestoI->delete();
        \Session::flash('mensaje', 'Supuesto de Iniciativa eliminada satisfactoriamente');
        return redirect()->route('supuestoI.index');
    }
}
