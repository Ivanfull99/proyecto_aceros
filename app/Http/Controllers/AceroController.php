<?php

namespace App\Http\Controllers;

use App\Models\Acero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AceroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aceros = Acero::all();
        return view('aceros.index-aceros',compact('aceros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/aceros/create-aceros');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'tipo_calibre' => ['required', 'integer' ],
            'costos' => ['required', 'integer' ],
            'cantidad' => ['required', 'integer']
        ]);
        
        $aceros = new Acero();
        $aceros->tipo_calibre = $request -> tipo_calibre;
        $aceros->costos = $request -> costos; 
        $aceros->cantidad = $request -> cantidad;
        $aceros->save();
        return AceroController::index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Acero $acero)
    {
        return view('aceros/show-aceros', compact('acero')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acero $acero)
    {
        return view('aceros/edit-aceros', compact('acero')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acero $acero)
    {
        $request->validate([
            
            'tipo_calibre' => ['required', 'integer' ],
            'costos' => ['required', 'numeric' ],
            'cantidad' => ['required', 'integer']
        ]);

        $acero->tipo_calibre = $request -> tipo_calibre;
        $acero->costos = $request -> costos; 
        $acero->cantidad = $request -> cantidad;
        $acero->save();
    
            return redirect()->route('acero.show', $acero);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acero $acero)
    {
        //
    }
}
