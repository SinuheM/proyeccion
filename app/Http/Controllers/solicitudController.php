<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Redirect;
use Auth;
use Session;

class solicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //
    public function contactoNuevo()
    {
        if (Auth::check()) { 
            $facultades = DB::table('facultads')->get();
            $motivos = DB::table('motivos')->get();
            return view('contacto',['facultads' => $facultades, 'motivos' => $motivos]);
        }
        return Redirect('login');
    }
    //
    public function solicitud()
    {
        if (Auth::check()) { 
            $facultades = DB::table('facultads')->get();
            $motivos = DB::table('motivos')->get();
            return view('solicitud',['facultads' => $facultades, 'motivos' => $motivos]);
        }
        return Redirect('login');
    }
    public function reporte()
    {
        if (Auth::check()) { 
            $facultades = DB::table('facultads')->get();
            $motivos = DB::table('motivos')->get();
            return view('reporte',['facultads' => $facultades, 'motivos' => $motivos]);
        }
        return Redirect('login');
    }

    //JSON
    public function solicitudList()
    {
        // - Codigo - Nombre - Motivo - Monto - Facultad - Fecha - Estado
        if (Auth::check()) { 
            $pedidos = DB::table('solicitudes')
                        ->join('estudiantes', 'estudiantes.id', '=', 'solicitudes.id')
                        ->join('motivos', 'motivos.id', '=', 'solicitudes.motivo_id')
                        ->join('facultads', 'facultads.id', '=', 'estudiantes.facultad_id')
                        ->select('codigo','estudiantes.nombre as nombreEst','motivos.nombre as nombreMot','monto','facultads.nombre as nombreFac','solicitudes.fecha','solicitudes.informe')
                        ->get();
            
            return response()->json(
                $pedidos
            );
        }
        return Redirect('login');
    }
    public function solicitudAllList()
    {
        // - Codigo - Nombre - Motivo - Monto - Facultad - Fecha - Estado
        if (Auth::check()) {
            $pedidos = DB::table('solicitudes')
                        ->join('estudiantes', 'estudiantes.id', '=', 'solicitudes.id')
                        ->join('motivos', 'motivos.id', '=', 'solicitudes.motivo_id')
                        ->join('facultads', 'facultads.id', '=', 'estudiantes.facultad_id')
                        ->select('codigo','estudiantes.nombre as nombreEst','motivos.nombre as nombreMot', 'motivos.id','monto','facultads.id as idFac','facultads.nombre as nombreFac','solicitudes.fecha','solicitudes.informe','estudiantes.domicilio','estudiantes.dni','solicitudes.semestre','solicitudes.expediente','solicitudes.garantiza','solicitudes.observacion')
                        ->get();
            
            return response()->json(
                $pedidos
            );
        }
        return Redirect('login');
    }

}
