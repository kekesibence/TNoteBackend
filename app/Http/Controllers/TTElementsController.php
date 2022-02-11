<?php

namespace App\Http\Controllers;

use App\Models\TTElements;
use Illuminate\Http\Request;

class TTElementsController extends Controller
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
        $ttelements = new TTElements();
        $ttelements->fill($request->only([
            'ttid', 
            'day', 
            'title',
            'description',
            'start',
            'end',
            'repeating']));
        $ttelements->save();
        return response()->json($ttelements, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TTElements  $tTElements
     * @return \Illuminate\Http\Response
     */
    public function show(TTElements $tTElements)
    {
        return TTElements::findOrFail($tTElements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TTElements  $tTElements
     * @return \Illuminate\Http\Response
     */
    public function edit(TTElements $tTElements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TTElements  $tTElements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TTElements $tTElements)
    {
        $tTElements->fill($request->only([
            'ttid', 
            'day', 
            'title',
            'description',
            'start',
            'end',
            'repeating']));
        $tTElements->save();
        return response()->json($tTElements, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TTElements  $tTElements
     * @return \Illuminate\Http\Response
     */
    public function destroy(TTElements $tTElements)
    {
        return TTElements::destroy($tTElements->ttid);
    }

    public function getAllElements($tableId) 
    {
        $elements = TTElements::get()->where('ttid', $tableId);

        return $elements;
    }
}
