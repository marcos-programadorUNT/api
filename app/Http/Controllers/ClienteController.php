<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;

class ClienteController extends Controller
{
    
    public function logueo(Request $request)
    {
        $cont= DB::table('cliente')
               ->where('dniCliente',$request->dniCliente)
               ->where('contraseñaCliente',$request->contraseñaCliente)
               ->count();
        
        if($cont == 0)
            return "Error en logueo";
        else
        {
            if ($cont > 0)
            {
                /* $datosCliente=DB::table('cliente')
                              ->where('dniCliente',$request->dniCliente)
                              ->where('contraseñaCliente',$request->contraseñaCliente)
                              ->get();
                return response()->json($datosCliente); */

                $cliente = Cliente::where('dniCliente',$request->dniCliente)
                ->where('contraseñaCliente',$request->contraseñaCliente)->get();
                return $cliente;
            }

        }
       
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Cliente::where('idCliente',$request->idCliente)->first();
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
}
