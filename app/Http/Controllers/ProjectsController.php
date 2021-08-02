<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function getProjects(){
        $projects = DB::select("select * from projects;");

        var_dump($projects);

        return view("projects.all_projects")->with("projects", $projects);
    }

    public function getProjectById($id){
        $project = DB::select("select * from projects where id = ?", [$id]);

        if(!$project){
            return view("projects.project_notfound");
        };

        return view("projects.project")->with("project", $project);
    }
}
