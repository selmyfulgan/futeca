<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;

class cat_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado= \App\cat_cat::all();

        return view('cat_cat.index',compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cat_cat.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $new = new  \App\cat_cat();
        $new->id_cat = $request->id_cat;
        $new->descripcion = $request->descripcion;
        $new->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id="")
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
       dd("muetra el edit");
        $elemento = \App\cat_cat::find($id);
        if($elemento == null){
            dd("no exite");
        }else{
            return view("cat_cat.editar",compact('elemento'));
        }
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
        $modificado = \App\cat_cat::find($id);
        if($modificado <> null){
            $modificado->descripcion = $request->descripcion;
            $modificado->save();
        }else{
            dd("no guardo nada =(");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muerte = \App\cat_cat::find($id);
        if($muerte <>null)
        {
            try{
                $exito = $muerte->delete();
                return $this->index();
            }catch (QueryException $error){
                dd("no sea tramposo, alli hay items");
            }
        }else{
            dd("que no trae datos");
        }

    }
}
