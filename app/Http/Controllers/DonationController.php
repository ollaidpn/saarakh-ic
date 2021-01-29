<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('FrontOffice.Pages.makeDonation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'nom_donateur'=>'required',
            'profession'=>'required',
            'mobile'=>'required',
            'adresse'=>'required',
            'email'=>'required',
            'montant'=>'required',
            'cause_id'=>'required',

        ]);
        $donation = new Donation();
        $donation->nom_donateur=$request->input('nom_donateur');
        $donation->profession=$request->input('profession');
        $donation->mobile=$request->input('mobile');
        $donation->adresse=$request->input('adresse');
        $donation->email=$request->input('email');
        $donation->montant=$request->input('montant');
        $donation->cause_id=$request->input('cause_id');

        $donation->save();
        return redirect('faire-un-don/') ->with('success', 'Demande envoyée!');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
