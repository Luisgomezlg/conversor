<?php

namespace App\Http\Controllers;

use App\Models\Conversor;
use App\Http\Requests\StoreConversorRequest;
use App\Http\Requests\UpdateConversorRequest;
use Inertia\Inertia;

use function Termwind\render;

class ConversorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Inertia::render('Conversor');

    }
    public function conversor()
    {
        //
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
     * @param  \App\Http\Requests\StoreConversorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConversorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conversor  $conversor
     * @return \Illuminate\Http\Response
     */
    public function show(Conversor $conversor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conversor  $conversor
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversor $conversor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConversorRequest  $request
     * @param  \App\Models\Conversor  $conversor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConversorRequest $request, Conversor $conversor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conversor  $conversor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversor $conversor)
    {
        //
    }
}
