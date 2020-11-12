<?php

namespace App\Http\Controllers;

use App\Models\Vaccines;
use Illuminate\Http\Request;

class VaccinesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaccines= Vaccines::all();
        return view('vaccines.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccine = Vaccines::create([
            'name'=>$request->name,

         ]);
         if($vaccine){
             return redirect('vaccines');
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccines = Vaccines::find($id);
        return view('vaccines.show', compact('vaccines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $vaccines= Vaccines::find($id);
        return view('vaccines.create', compact('vaccines'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vaccine = Vaccines::where(['id'=>$id])->update([
            'name'=>$request->name,
        ]);
        return redirect('vaccines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vaccines  $vaccines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccines $vaccines)
    {
        //
    }
}
