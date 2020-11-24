<?php

namespace App\Http\Controllers;


use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class AnimalController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $animals= Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal= Animal::create([
            'name'=>$request->name,

         ]);
         if($animal){
             return redirect('animals');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = Animal::find($id);
        return view('animals.show', compact('animals'));
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animals= Animal::find($id);
        return view('animals.create', compact('animals'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $animal = Animal::where(['id'=>$id])->update([
            'name'=>$request->name,
        ]);
        return redirect('animals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        redirect('animals');

    }
}
