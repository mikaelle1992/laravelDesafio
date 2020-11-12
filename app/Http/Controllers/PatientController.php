<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Breed;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PatientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients= Patient::all();
        return view('patients.index', compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $clients = Client::all();
         $breeds = Breed::all();
        return view('patients.create', compact('breeds','clients'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $patient= Patient::create([
            'name'=>$request->name,
            'date_birth'=>$request->date_birth,
            'gender'=>$request->gender,
            'breed_id'=>$request->breed_id,
            'client_id'=>$request->client_id
         ]);
         if($patient){
             return redirect('patients');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $patients = Patient::find($id);
        return view('patients.show', compact('patients'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients= Patient::find($id);
        $breeds= Breed::all();
        $clients= Client::all();
        return view('patients.create', compact('patients','clients','breeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patients = Patient::where (['id'=>$id])->update([
            'name'=>$request->name,
            'date_birth'=>$request->date_birth,
            'gender'=>$request->gender,
            'breed_id'=>$request->breed_id,
            'client_id'=>$request->client_id,
        ]);
        return redirect('patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
