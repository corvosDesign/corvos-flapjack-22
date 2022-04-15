<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

use Illuminate\Support\Facades\Auth;
use App\Models\Client;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->hasAuth){
            return redirect()->route('dashboard');

        }elseif(Auth::check()){
            $client = Auth::user();
            $company = $client->client_id;
            $projectList = Project::all()->loadmissing('client')->where('client_id',$company);
             return view('auth.client',['projects'=>$projectList]);
        } else{
          return redirect()->route('login');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check() && Auth::user()->hasAuth){

        return response ()
        -> view('projects.newproject');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        $project_detail = Project::find($project->id);
        $company = $project_detail->client;
        $proofs = $project_detail->proofs->load(['comments']);
        $users=$project_detail->client->user;
        $path = "proofs/".$company->name."/".$project_detail->project_title."/";

        return view('projects.project_detail', ['company'=>$company, 'project'=>$project_detail ,'proofs'=>$proofs, 'users'=>$users, 'path'=>$path,]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
