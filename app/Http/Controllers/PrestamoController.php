<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Cliente;
use App\Mail\DemoEmail;
use DB;
use Illuminate\Support\Facades\Mail;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $cliente = Cliente::where('dniCliente',$request->dniCliente)->first();
            $prestamos = Prestamo::where('dniCliente',$cliente->dniCliente)->get();
            return [$prestamos,$cliente];
        } catch (Exception $e) {
            return $e;
        }
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
            $cliente->dniCliente = $request->dniCliente;
            $cliente->nombreCliente = $request->nombreCliente;
            $cliente->emailCliente = $request->emailCliente;
            $cliente->celularCliente = $request->celularCliente;
            $cliente->save();

            $prestamo=new Prestamo();
            $prestamo->dniCliente=$request->dniCliente;
            $prestamo->montoPrestamo=$request->montoPrestamo;
            $prestamo->cuotasPrestamo=$request->cuotasPrestamo;
            $prestamo->estadoPrestamo="pendiente";
            $prestamo->save();

            Mail::to($cliente->emailCliente)
            ->send(new DemoEmail($prestamo, $cliente));
            return $prestamo;
        }
        catch (Exception $e){
            return $e;
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
