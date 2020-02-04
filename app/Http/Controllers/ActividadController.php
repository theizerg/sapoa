<?php

namespace App\Http\Controllers;
use App\Actividades;
use DateTime;
use Illuminate\Http\Request;


class ActividadController extends Controller

  {  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

  

    public function index()
    {
       
        $actividades=Actividades::paginate(5);
        return view ('actividades.index' ,compact('actividades','iniciativa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iniciativa=\Session::get('iniciativa');
        $directriz=\Session::get('directriz');
        $objetivos=\Session::get('objetivo');
        $obj=\Session::get('objetivo');
        //dd($objetivos);
        return view('actividades.create', compact('objetivos','iniciativa','directriz','obj'));

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
            'tx_descripcion'=>'required',
            'tx_producto'=>'required',
            'tx_requerimiento'=>'required',
            'tx_responsable'=>'required',
            'fe_inicio'=>'required',
            'fe_fin'=>'required',
  ]);

     $actividades= Actividades::create($request->all());
    \Session::flash('mensaje', 'Actividades de iniciativa creadas satistactoriamente');
        return redirect()->route('actividades.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $objetivos=\Session::get('objetivo');
        $actividades=Actividades::with(['objetivo.proyecto','objetivo.gerencia','objetivo.coordinacion','iniciativa','objetivo'])->find($id);
        $objetivo=$actividades->objetivo->proyecto->nb_proyecto;

        $iniciativas=$actividades->fe_inicio;
        $string=substr("$iniciativas", 0, 10);
        $string2 = explode('-',$string);
        $fechainicio = $string2[2]."-".$string2[1]."-".$string2[0];

        $actividad=$actividades->fe_fin;
        $strings=substr("$actividad", 0, 10);
        $strings2 = explode('-',$strings);
        $fechafinal = $strings2[2]."-".$strings2[1]."-".$strings2[0];
        
        $datetime1 = new DateTime($fechainicio);
        $datetime2 = new DateTime($fechafinal);
        $interval = $datetime1->diff($datetime2);
        $fechacompleta=$interval->format('%a');

        //dd($fechacompleta);

        return view('actividades.show', compact('actividades','objetivos','fechainicio','fechafinal','objetivo','fechacompleta'));
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
        $actividades=Actividades::with(['objetivo.proyecto',
            'objetivo.gerencia',
            'objetivo.coordinacion',
            'iniciativa'])
            ->find($id);

        $iniciativas=$actividades->fe_inicio;
        $string=substr("$iniciativas", 0, 10);
        $string2 = explode('-',$string);
        $fechainicio = $string2[2]."-".$string2[1]."-".$string2[0];

        $actividad=$actividades->fe_fin;
        $strings=substr("$actividad", 0, 10);
        $strings2 = explode('-',$strings);
        $fechafinal = $strings2[2]."-".$strings2[1]."-".$strings2[0];
        //dd($fechafinal);
        $obj=\Session::get('objetivo');
        $iniciativa=\Session::get('iniciativa');
        return view('actividades.edit', compact('actividades','obj','iniciativa','objetivos','fechainicio','fechafinal'));  

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
        //print_r($_POST);
        //die();
                  request()->validate([

            'id_iniciativa'=>'required',
            'id_objetivo'=>'required',
            'tx_descripcion'=>'required',
            'tx_producto'=>'required',
            'tx_requerimiento'=>'required',
            'tx_responsable'=>'required',
            'fe_inicio'=>'required',
            'fe_fin'=>'required',
  ]);

$Actividades = Actividades::find($id);

        $Actividades->id_objetivo        = $request->input('id_objetivo');
        $Actividades->id_iniciativa   = $request->input('id_iniciativa');
        $Actividades->tx_descripcion            = $request->input('tx_descripcion');
        $Actividades->tx_producto  = $request->input('tx_producto');
        $Actividades->tx_requerimiento       = $request->input('tx_requerimiento');
        $Actividades->tx_responsable       = $request->input('tx_responsable');
        $Actividades->fe_inicio          = $request->input('fe_inicio');
        $Actividades->fe_fin      = $request->input('fe_fin');
        
        $Actividades->update();

         \Session::flash('mensaje', 'Actividad de la iniciativa Actualizada satisfactoriamente');

         return redirect()->route('actividades.index');


        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividades = Actividades::find($id);
        $actividades->delete();
        \Session::flash('mensaje', 'Actividades eliminada satisfactoriamente');
        return redirect()->route('actividades.index');
    }
}
  