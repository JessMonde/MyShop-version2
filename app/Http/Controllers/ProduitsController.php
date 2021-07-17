<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resource.produit')
        ->withDatas(Produits::All())
        ->withCategories(Categorie::all());
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
        $request->validate([
            'libelle' ,
            'images', 
            'description',
            'prix',
            'quantite',
        ]);
  
        Produits::create($request->All());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *@param  int  $id
     * @param  \App\Model\Produits  $produits
    * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits,$id)
    {
        $editdata = Produits::FindOrFail($id);
        return view('resource.produit')
         ->withDatas(Produits::all())
         ->withCategorie(Categorie::all())
         ->with(compact(['editdata']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Produits  $produits
     * @return \Illuminate\Http\Response
     * @param  int  $id
     */
    public function update(Request $request, Produits $produits,$id)
    {
        Produits::FindOrFail($id)->update($request->all());
        return redirect()->route('Produits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Produits  $produits
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produits::FindOrFail($id)->delete();
        return redirect()->route('Produits.index');
    }

    public function upload(Request $request,Produits $album)
    {
        if($request->has('image')){
            dd($request->image);
        };
    }
}
