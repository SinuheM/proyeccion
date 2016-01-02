<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function paginar()
    {
        //$users = User::paginate();


       if (Auth::check()) { 
            $colaboradores = DB::table('colaboradors')->get();
            $packes = DB::table('packs')->get();
            return view('listaPedido',['colaboradores' => $colaboradores, 'packes' => $packes]);
        }
        return Redirect('login');



        //$pedidos = \App\pedido::paginate(15);

        //return View::make('listaPedido')->with('users', $users);
//        return View('listaPedido')->with('pedidos', $pedidos);
    }
    public function paginar2()
    {
        return view('backofficeAjax');
    }
    public function paginarJson()
    {
        //$users = User::paginate();
       if (Auth::check()) { 
            $pedidos = DB::table('pedidos')
                        ->join('estadopedidos', 'estadoPedido_id', '=', 'estadopedidos.id')
                        ->select('pedidos.id','clientePedido','telefonoPedido','combo_id','dificultadPedido','nombreEstado','fechahoraPedido','tiempoEstimado','fechahoraLavado','fechahoraPendiente', DB::raw('time(pedidos.fechahoraLavado) as horaPedido'))
                        ->where('estadoPedido_id', '<', 4)
                        ->get();
            
            return response()->json(
                $pedidos
            );
        }
        return Redirect('login');
    }

    public function welcome(){
        return view('welcome');
    }
    public function comoFunciona(){
        return view('howitWorks');
    }

    public function confirmacion()
    {
        return view('confirmacion');
    }

    public function pedidoNuevo()
    {
        return view('pedidoNew');
    }

    public function create()
    {
        return view('pedidoNew');
    }
    public function suscripcion()
    {
        return view('graciasSuscr');
    }
    public function store(Request $request)
    {
            $pedido = \App\pedido::create([
                'clientePedido' => $request['Nombre'],
                'telefonoPedido'=> $request['Telefono'],
                'correoPedido' => $request['Correo'],
                'direccionPedido' => $request['Direccion'],
                'distritoPedido' => "Huancayo",
                'provinciaPedido' => "Huancayo",
                'departamentoPedido' => "Junin",
                'referenciaPedido' => $request['Referencia'],
                'fechahoraPedido' => Carbon::now(),
                'colaborador_id' => $request['Colaborador'],
                'cliente_id' => $request['Cliente'],
                'usuario_id' => $request['Usuario'],
                'carro_id' => $request['Carro'],
                'combo_id' => $request['Pack'],
                'estadoPedido_id' => "1",
                'fechahoraLavado' => $request['FechaPedido']." ".$request['HoraPedido'],
                'notaPedido' => $request['NotaPedido'],
                ]);
            \App\carro::create([
                'placaCarro' => "",
                'marcaCarro'=> "",
                'modeloCarro' => "",
                'colorCarro' => "",
                ]);
            //return redirect()->route('gracias', [$pedido]);       
            return redirect('/gracias')->with('id', $pedido->id);
            //return redirect('gracias')->header('id', $pedido->id); 
    }
    public function nuevo(Request $request)
    {
        \App\pedido::create([
            'clientePedido' => $request['Nombre'],
            'telefonoPedido'=> $request['Telefono'],
            'correoPedido' => $request['Correo'],
            'direccionPedido' => $request['Direccion'],
            'referenciaPedido' => $request['Referencia'],
            'distritoPedido' => $request['Distrito'],
            'provinciaPedido' => $request['Provincia'],
            'departamentoPedido' => $request['Departamento'],
            'fechahoraPedido' => Carbon::now(),
            'colaborador_id' => $request['Colaborador'],
            'cliente_id' => $request['Cliente'],
            'usuario_id' => $request['Usuario'],
            'carro_id' => $request['Carro'],
            'combo_id' => $request['Pack'],
            'estadoPedido_id' => "1",
            'fechahoraLavado' => $request['FechaPedido']." ".$request['HoraPedi'],
            'notaPedido' => $request['NotaPedido'],
            ]);
        return view('confirmacion');
    }
    public function edit($id)
    {
        $pedido = \App\pedido::find($id);
        return response()->json([
            $pedido->toArray()
        ]);
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
        $pedido = \App\pedido::find($id);
        /*$pedido->fill([
            // 'correoPedido' => $request['Correo'],
            // 'direccionPedido' => $request['Direccion'],
            // 'distritoPedido' => $request['Distrito'],
            // 'provinciaPedido' => $request['Provincia'],
            // 'departamentoPedido' => $request['Departamento'],
            // 'colaborador_id' => $request['Colaborador'],
            // 'colaborador_id2' => $request['Colaborador2'],
            // 'cliente_id' => $request['Cliente'],
            // 'usuario_id' => $request['Usuario'],
            // 'combo_id' => $request['Pack'],
            // 'fechahoraLavado' => $request['FechaPedido']." ".$request['HoraPedi'],
            // 'carro_id' => $request['Carro'],
            'estadoPedido_id' => $request['estadoID'],
            'notaPedido' => $request['NotaPedido'],
            ]); */
        $pedido->fill($request->all());
        $pedido->save();
        return response()->json([
            "mensaje" => "Actualizado correctamente"
        ]);
    }
    /*
        */
}
