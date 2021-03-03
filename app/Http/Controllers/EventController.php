<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
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
        return view('BackOffice.Pages.events');
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
            'nom'=>'required',
            'description'=>'required',
            'categorie'=>'required',
            'd_debut'=>'required',
            'h_debut'=>'required',
            'd_fin'=>'required',
            'h_fin'=>'required',
            'photo'=>'nullable',
            'lieux'=>'required',
        ]);
        $event = new Event();
        $event->nom=$request->input('nom');
        $event->description=$request->input('description');
        $event->categorie=$request->input('categorie');
        $event->d_debut=$request->input('d_debut');
        $event->h_debut=$request->input('h_debut');
        $event->d_fin=$request->input('d_fin');
        $event->h_fin=$request->input('h_fin');
        $event->lieux=$request->input('lieux');
        if ($request->hasFile('photo')) {

            $file_name = time().'.'.$request->photo->getClientOriginalExtension();
            $path_name = 'storage/uploads/files/'. date('Y')."/". date('F'). '/';

            if ($request->photo->move($path_name, $file_name)) {
                $event->photo = $path_name.$file_name;
            }


        }

        $event->save();
        return redirect('/admin/evenements/') ->with('success', 'Demande envoyée!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
