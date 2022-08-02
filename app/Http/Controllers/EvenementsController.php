<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('liste', ['evenements=>Evenement::all()']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Evenement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evenement::created( [
         'id'=>$request->id,
         'designation'=>$request->designation,
         'categorie'=>$request->categorie,
         'date'=>$request->date,
         'photo'=>$request->photo->store('img', 'public')

        ]);
        return redirect()->route('evenement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return View('show',[ 'finds'=>Evenement:: find($id),
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return View('show',[ 'finds'=>Evenement:: find($id),
    ]);
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
        $even=Evenement::find($id);
        $even->update($request->all());
                return redirect()->route('evenement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $even=Evenement::find($id);
        $even->delete();
        return redirect()->route('evenement.index');

    }
}
