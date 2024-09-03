<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        return view( "projects.index", [
            'projects' => Storage::disk( 'portfolio' )->json( 'projects.json' ),
        ] );
    }

    public function show( string $id )
    {
        $projects = Storage::disk( 'portfolio' )->json( 'projects.json' );

        $projectById = array_filter( $projects, fn( $project ) => $project['id'] === $id );

        return view( "projects.show", ['project' => current( $projectById )] );
    }

}