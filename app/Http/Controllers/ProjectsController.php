<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    protected function index() {

        $projects = Project::all();

        return view('pages.projects', [
          'projects'  => $projects
        ]);

        // return Inertia::render('Projects/Index', [
        // ]);
    }

    protected function import(Request $request)
    {
      if($request->post('directory')) {
        $dir = $request->post('directory');
      } else {
        $dir    = $_SERVER['HOME'];
      }

      $directoryStructure = preg_grep('/^([^.])/', scandir($dir));

      $tempDir = [];
      foreach ($directoryStructure as $directory) {
        $tempDir[] = [
          'name' => $directory,
          'path' => $dir .  '/' . $directory
        ];
      }

      $directoryStructure = $tempDir;

      return Inertia::render('Projects/Import', [
        'directoryStructure' => $directoryStructure
      ]);
    }

    protected function openInEditor(Request $request)
    {
      $editor = config('app.editor');
      echo exec($editor . ' ' . request('path'));
      return back();
    }
}
