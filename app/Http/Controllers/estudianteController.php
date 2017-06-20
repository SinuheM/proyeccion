<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class estudianteController extends Controller
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
        $solicitud = \App\estudiante::create([
                'codigo' => $request['code'],
                'nombre'=> $request['name'],
                'domicilio' => $request['casa'],
                'dni' => $request['dni'],
                'facultad_id' => $request['facu'],
                ]);
            \App\solicitud::create([
                'semestre' => $request['sem'],
                'fecha'=> $request['date'],
                'monto' => $request['monto'],
                'expediente' => $request['exp'],
                'garantiza' => $request['garant'],
                'motivo_id' => $request['motive'],
                'user_id' => '1',
                'estudiante_id' => $solicitud->id,
                ]);
            //return redirect()->route('gracias', [$pedido]);       
            return redirect('/registrado');
            //return redirect('gracias')->header('id', $pedido->id); 
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
}
