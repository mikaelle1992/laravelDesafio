<?php

namespace App\Http\Controllers;


use App\Models\Animal;
use App\Models\Breed;
use Illuminate\Http\Request;


class AnimalController extends Controller
{
    private $animal;
    private $breed;

    public function __construct()
    {
        $this->animal=new Animal();
        $this->breed=new Breed();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       dd($this->animal->find(1)->relBreeds);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animals)
    {
        //
    }
}
