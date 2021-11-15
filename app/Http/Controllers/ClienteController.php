<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use DB;

class ClienteController extends Controller
{
    
    public function logueo(Request $request)
    {
        $cliente = Cliente::where('dniCliente',$request->dniCliente)
        ->where('contraseñaCliente',$request->contraseñaCliente)->first();
        if ($cliente) {
            return $cliente;
        }else {
            return "Error no encontrado";
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
        try{
            $cliente=new Cliente();
            $cliente->emailCliente=$request->emailCliente;
            $cliente->nombreCliente=$request->nombreCliente;
            $cliente->direccionCasaCliente=$request->direccionCasaCliente;
            $cliente->dniCliente=$request->dniCliente;
            $cliente->celularCliente=$request->celularCliente;
            $cliente->contraseñaCliente=$request->contraCliente;
            $cliente->save();
            return $cliente;
        }
        catch (Exception $e){
            return "Error - ". $e->getMessage();
        }
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
