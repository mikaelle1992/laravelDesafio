<?php

namespace App\Http\Controllers;

use App\Models\Vaccine_wallets;
use App\Models\Vaccine;
use App\Models\Vaccines;
use Illuminate\Http\Request;

class VaccineWalletsController extends Controller
{
    private $vaccine_wallets;
    private $vaccine;


    public function __construct()
    {
        $this->vaccine=new Vaccines();
        $this->vaccine_wallets=new Vaccine_wallets();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd($this->vaccine_wallets->find(1)->relUser);
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
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccine_wallets $vaccine_wallets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccine_wallets $vaccine_wallets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccine_wallets $vaccine_wallets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine_wallets  $vaccine_wallets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccine_wallets $vaccine_wallets)
    {
        //
    }
}
