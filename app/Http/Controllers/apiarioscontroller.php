<?php

namespace apilogic\Http\Controllers;

use apilogic\apiario;
use Illuminate\Http\Request;

use apilogic\Http\Requests;
use apilogic\Http\Controllers\Controller;

class apiarioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiario = apiario::orderBy('id', 'ASC')->paginate(5);
        return view('apiario.apiarios.index')->with('apiarios', $apiario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apiario.apiarios.creapiario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apiario =  new apiario($request->all());
        $apiario->save();
        return redirect()->route('apiario.apiarios.index');

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
        $apiario = apiario::find($id);

        return view('apiario.apiarios.edit') ->with('apiario', $apiario) ;
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
        $apiario = apiario::find($id);
        $apiario->nombre_apiario = $request->nombre_apiario;
        $apiario->cantidad_colmenas = $request->cantidad_colmenas;
        $apiario->municipio = $request->municipio;
        $apiario->save();
        return redirect()->route('apiario.apiarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        apiario::destroy($id);
        return redirect()->route('apiario.apiarios.index');
    }
}
