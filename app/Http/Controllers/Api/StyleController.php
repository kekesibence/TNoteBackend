<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StyleRequest;
use App\Models\Styles;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Styles::all(), 200);
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
    public function store(StyleRequest $request)
    {
        $request->validate($request->rules());

        $style = new Styles();
        $style->fill($request->only(['userId', 'description', 'style']));
        $style->save();

        return response()->json($style, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Styles  $styles
     * @return \Illuminate\Http\Response
     * int formaban erkezik az id mert ha Styles volt a tipusa nem ment
     */
    public function show($styles)
    {
        return response()->json(Styles::findOrFail($styles), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Styles  $styles
     * @return \Illuminate\Http\Response
     */
    public function edit(Styles $styles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Styles  $styles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Styles $styles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Styles  $styles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Styles $styles)
    {
        //
    }
}
