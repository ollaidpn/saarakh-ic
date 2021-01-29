<?php

namespace App\Http\Controllers;

use App\Models\InfosSystem;
use Illuminate\Http\Request;

class InfosSystemController extends Controller
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
        return view('BackOffice.Pages.systemInfos');
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

            'app_name'=>'required',
            'description'=>'required',
            'mobile'=>'required',
            'fixe'=>'required',
            'email'=>'required',
            'address'=>'required',

        ]);
        $infosSystem = InfosSystem::find(1);
        $infosSystem->app_name=$request->input('app_name');
        $infosSystem->description=$request->input('description');
        $infosSystem->mobile=$request->input('mobile');
        $infosSystem->fixe=$request->input('fixe');
        $infosSystem->email=$request->input('email');
        $infosSystem->address=$request->input('address');
        $infosSystem->save();
        return redirect('/admin/infos-systems/') ->with('success', 'Demande envoyée!');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfosSystem  $infosSystem
     * @return \Illuminate\Http\Response
     */
    public function show(InfosSystem $infosSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfosSystem  $infosSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(InfosSystem $infosSystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfosSystem  $infosSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfosSystem $infosSystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfosSystem  $infosSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfosSystem $infosSystem)
    {
        //
    }
}
