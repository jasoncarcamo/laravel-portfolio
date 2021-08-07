<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectsServices;

class ProjectsController extends Controller
{
    public function get_projects(){
        $project_services = new ProjectsServices(); 

        $projects = $project_services->get_projects();

        return view("projects.all_projects")->with("projects", $projects);
    }

    public function get_project($id){
        $project_services = new ProjectsServices();

        $project = $project_services->get_project_by_id($id);

        if(!$project){
            return view("projects.project_notfound");
        };

        return view("projects.project")->with("project", $project);
    }

    public function create_project(Request $request){
        $project_services = new ProjectsServices();
        $new_project = $project_services->set_props($request);

        foreach($new_project as $project => $project_value){
            if(!$project_value){
                return response([
                    "bad" => "Missing $project"
                ]);
            };
        };

        $created_project = $project_services->create_project($new_project);

        return response([
            "success" => $created_project
        ], 200);
    }

    public function update_project(Request $request, $id){
        $project_services = new ProjectsServices();
        $project = $project_services->get_project_by_id($id);

        if(!$project){
            return view("projects.project_notfound");
        };

        $project = $project_services->set_props($request);
        $updated_project = $project_services->update_project($project, $id);

        var_dump($updated_project);
        
        return view("projects.project_created")->with("project", $project);
    }

    public function delete_project($id){
        $project_services = new ProjectsServices();

        
    }
}
