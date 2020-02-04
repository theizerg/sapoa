<?php

namespace App\Http\Controllers;
use App\Proyecto; 
use App\Gerencia; 
use Illuminate\Http\Request;

##########################################################
#Middleware para determinar los permisos de cada usuario##
##########################################################

class GerenciaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $gerencia = Gerencia::with(['proyecto'])->paginate(5);                       
        return view ('gerencia.index',compact('gerencia'));
        //return   $gerencia->proyecto->nb_proyecto;         
    }

     public function coordinaciones(Request $request)
    {
            
            $gerencia = Gerencia::find($request->gerencia);
            if($gerencia){
                $coordinaciones = $gerencia->coordinacion;
            }
            

            return compact('coordinaciones');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto=Proyecto::All();
        return view ('gerencia.create',compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                Gerencia::create([
                'nb_gerencia'=> $request ['nb_gerencia'],
                'id_proyecto'=> $request ['id_proyecto'],
            ]);
            return redirect ('gerencia')->with('massage','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gerencia=Gerencia::with(['proyecto'])->find($id);
        return view ('gerencia.show',compact('gerencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gerencia=Gerencia::find($id);
      return view ('gerencia.edit', compact('gerencia'));
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
        'nb_gerencia' => 'required',
         ]);

         $gerencia=Gerencia::find($id)->update($request->all());
        return redirect()->route('gerencia.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gerencia = Gerencia::find($id);
        $gerencia->delete();
        return back()->with('info','Gerencia eliminada correctamente');
    }
}
