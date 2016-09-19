<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Jugadores;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('soy el index');
       // $jugadores = Jugadores::where('tipo_llamada')->get();
        $jugadores = DB::table('tm_jugador')->get();
        dd($jugadores);
        return view('rap.denuncia.index',compact('denuncia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jugadores.create');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

         DB::beginTransaction();
        try{
            $nuevo = new Jugadores;
            $nuevo->nombres = $request->jugador;
            $nuevo->apellidos = $request->apellidos;
            $nuevo->fecha_nacimiento = $request->nace;
            $nuevo->telefono = $request->tel;
           // $nuevo->direccion = $request->direccion;
            $nuevo->id_equipo = 2;
            $nuevo->save();
            DB::commit();
            dd($nuevo);
            //return view('jugadores.index');
        }catch (Exception $e){
            DB::rollBack();
            return response('Ocurrio un error, los datos no pudieron ser almacenados.',500);
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
