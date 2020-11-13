<?php

namespace App\Http\Controllers;

use App\Models\Vaccine_wallets;
use App\Models\Vaccines;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;

class VaccineWalletsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $patients = Patient::all();
        $vaccines = Vaccines::all();
        $vaccinewallets = Vaccine_wallets::all();
        return view('vaccinewallets.index', compact('users','patients','vaccines','vaccinewallets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $patients = Patient::all();
        $vaccines = Vaccines::all();
        return view('vaccinewallets.create', compact('users','patients','vaccines'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccinewallets = Vaccine_wallets::create([
            'user_id'=>$request->user_id,
            'vaccine_id'=>$request->vaccine_id,
            'patient_id'=>$request->patient_id,
            'vaccine_date'=>$request->vaccine_date,

         ]);
         if($vaccinewallets){
             return redirect('vaccinewallets');
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        $patients = Patient::find($id);
        $vaccines = Vaccines::find($id);
        $vaccinewallets = Vaccine_wallets::find($id);
        return view('vaccinewallets.show', compact('users','patients','vaccines','vaccinewallets'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users= User::all();
        $patients= Patient::all();
        $vaccines= Vaccines::all();
        $vaccinewallets = Vaccine_wallets::find($id);

        return view('vaccinewallets.create', compact('users','patients','vaccines','vaccinewallets'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $vaccine_wallets = Vaccine_wallets::where (['id'=>$id])->update([
            'user_id'=>$request->user_id,
            'vaccine_id'=>$request->vaccine_id,
            'patient_id'=>$request->patient_id,
            'vaccine_date'=>$request->vaccine_date,
        ]);
        return redirect('vaccinewallets');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccinewallet = Vaccine_wallets::find($id);
        $vaccinewallet->delete();
        return redirect('vaccinewallets');



    }
}
