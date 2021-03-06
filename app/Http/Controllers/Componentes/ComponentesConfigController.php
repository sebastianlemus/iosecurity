<?php

namespace App\Http\Controllers\Componentes;

use App\ComponenteConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentesConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ComponenteConfig::all());
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $config = ComponenteConfig::create($request->all());
        return response()->json($config);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ComponenteConfig $config)
    {
        return response()->json($config);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComponenteConfig $config)
    {
        $config->update($request->all());
        return response()->json($config);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponenteConfig $config)
    {
        $config->delete();
    }
}
