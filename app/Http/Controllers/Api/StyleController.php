<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StyleRequest;
use App\Models\Style;
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
        
        $style = new Style();
        $style->fill($request->only([
                                'userId',
                                'description',
                                'style']));
        
        $style->save();

        return response()->json($style, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function show(Style $style)
    {
        return $style;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function update(StyleRequest $request, Style $style)
    {
        $request->validate($request->rules());
        
        $style->fill($request->only([
                                'userId',
                                'description',
                                'style']));
        
        $style->save();

        return response()->json($style, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function destroy(Style $style)
    {
        return Style::destroy($style->id);
    }

    public function getRelated($id) {
        $styles = Style::get()->where('userId', $id);

        return $styles;
    }
}
