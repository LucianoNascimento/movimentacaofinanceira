<?php

namespace App\Http\Controllers;

use App\ValorEntrada;
use Illuminate\Http\Request;

class ValorEntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entrada.index');
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

        try {
                $valor = new ValorEntrada;
                $valor->descricao = $request->valor;
                $valor->valor_entrada = $request->valor_entrada;
                $valor->save();

            } catch (\Throwable $err) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ValorEntrada  $valorEntrada
     * @return \Illuminate\Http\Response
     */
    public function show(ValorEntrada $valorEntrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ValorEntrada  $valorEntrada
     * @return \Illuminate\Http\Response
     */
    public function edit(ValorEntrada $valorEntrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ValorEntrada  $valorEntrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $valor =ValorEntrada::find($id);
            $valor->descricao = $request->valor;
            $valor->valor_entrada = $request->valor_entrada;
            $valor->save();
        } catch (\Throwable $err) {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ValorEntrada  $valorEntrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValorEntrada $valorEntrada)
    {
        //
    }
}
