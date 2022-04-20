<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProofRequest;
use App\Http\Requests\UpdateProofRequest;
use App\Models\Proof;

class ProofController extends Controller
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
     * @param  \App\Http\Requests\StoreProofRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProofRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function show(Proof $proof)
    {
        //
        $proof_detail = Proof::find($proof->id)->load('comments');
        $company = $proof_detail->projects->client;
        $path = "proofs/".$company->name."/".$proof_detail->projects->project_title."/";


        $nextProof = Proof::where('project_id', $proof_detail->project_id);
        $next = $nextProof->firstWhere('id', '>', $proof_detail->id);

        $prevProof = Proof::where('project_id', $proof_detail->project_id);
        $previous =$prevProof->firstWhere('id', '<', $proof_detail->id);

        return view('projects.proof_detail', ['proof'=>$proof_detail, 'path'=>$path, 'next'=>$next, 'previous'=>$previous]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function edit(Proof $proof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProofRequest  $request
     * @param  \App\Models\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProofRequest $request, Proof $proof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proof  $proof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proof $proof)
    {
        //
    }
}
