<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStillRequest;
use App\Http\Requests\UpdateStillRequest;
use App\Models\Still;

class StillController extends Controller
{

    //ajax call to get gallery image locations

       public function ajax(Request $request){
           $category = $request->input('picture');

           $images=Still::where('category',$category)->where('visable',true)->orderBy('placement')->pluck('filename');
           return response()->json(['images'=>$images]);

       }

       public function stillHome(){
           return response ()
           -> view('stills');
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('stills.list2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response ()
        -> view('stills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Still  $still
     * @return \Illuminate\Http\Response
     */
    public function show(Still $still)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Still  $still
     * @return \Illuminate\Http\Response
     */
    public function edit(Still $still)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStillRequest  $request
     * @param  \App\Models\Still  $still
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStillRequest $request, Still $still)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Still  $still
     * @return \Illuminate\Http\Response
     */
    public function destroy(Still $still)
    {
        //
    }
}
