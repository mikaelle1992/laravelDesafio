<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Animal;
use Illuminate\Http\Request;

class BreedController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeds = Breed::all();
        return view ('breeds.index',compact('breeds',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breeds = Breed::all();
        return view ('breeds.create',compact('breeds',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $breed = Breed::create([
            'name'=>$request->name,
            'animal_id'=>$request->animal_id,

         ]);
         if($breed){
             return redirect('breeds');
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breeds = Breed::find($id);
        return view('breeds.show', compact('breeds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals= Animal::all();
        $breeds= Breed::find($id);
        return view('breeds.create', compact('animals','breeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $breed = Breed::where(['id'=>$id])->update([
            'name'=>$request->name,
            'animal_id'=>$request->animal_id,
        ]);
        return redirect('breeds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\breeds  $breeds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breed $breeds)
    {
        //
    }
}
