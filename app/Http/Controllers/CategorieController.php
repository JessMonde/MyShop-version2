<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resource.categorie')
        ->withDatas(Categorie::all());
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
        $request ->validate([
            'libelle'=>'required|string',
        ]);
        Categorie::create($request->All());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata = Categorie::FindOrFail($id);
        return view('resource.categorie')
                ->withDatas(Categorie::all())
                ->with(compact(['editdata']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Categorie  $categorie
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         Categorie::FindOrFail($id)->update($request->all());
         return redirect()->route('Categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Categorie  $categorie
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::FindOrFail($id)->delete();
        return redirect()->route('Categories.index');
    }
}
