<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use App\Models\Salario;
use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Vacante::class); //policy para las vistas del respectivo rol

        return view('vacantes.index');

        //return view('Dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Vacante::class);

        $salarios = Salario::all();

        return view('Vacantes/create', [
            'salarios' => $salarios
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        return view('vacantes.show', [
            'vacante' => $vacante
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {
        $this->authorize('update', $vacante); //añadiendo seguridad a traves del policy

        return view('vacantes.edit', [
            'vacante' => $vacante
        ]);
    }
}
