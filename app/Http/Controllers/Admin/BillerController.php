<?php

namespace App\Http\Controllers\Admin;

use App\Models\Biller;
use Illuminate\Http\Request;

class BillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Biller.Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Biller.Create');
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
     * @param  \App\Models\Biller  $biller
     * @return \Illuminate\Http\Response
     */
    public function show(Biller $biller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biller  $biller
     * @return \Illuminate\Http\Response
     */
    public function edit(Biller $biller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biller  $biller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biller $biller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biller  $biller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biller $biller)
    {
        //
    }
}
