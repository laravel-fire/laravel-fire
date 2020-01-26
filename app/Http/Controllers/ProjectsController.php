<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected function index() {

        $projects = Project::all();

        return Inertia::render('Projects/Index', [
            'projects'  => $projects
        ]);
    }

    protected function openInEditor(Request $request)
    {
      $editor = config('app.editor');
      echo exec($editor . ' ' . request('path'));
      return back();
    }
}
