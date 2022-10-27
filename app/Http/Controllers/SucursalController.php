<?php

namespace App\Http\Controllers;

use App\Models\sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Datos['Sucursals']=Sucursal::paginate(5);
        return view('Sucursal.index',$Datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DatosSucursal=request()->except('_token');
        sucursal::insert($DatosSucursal);
        return response()->json($DatosSucursal);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(sucursal $sucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sucursal $sucursal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sucursal::destroy($id);
        return redirect('sucursal');
    }
}
