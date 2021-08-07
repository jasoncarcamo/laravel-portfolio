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
            return view("projects.project_not_found");
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

        return view("projects.project_created")->with("created_project", $created_project);
    }

    public function update_project(Request $request, $id){
        $project_services = new ProjectsServices();
        $project = $project_services->get_project_by_id($id);

        if(!$project){
            return view("projects.project_not_found");
        };

        $project = $project_services->set_props($request);
        $updated_project = $project_services->update_project($project, $id);
        
        return view("projects.project_updated")->with("updated_project", $updated_project);
    }

    public function delete_project($id){
        $project_services = new ProjectsServices();
        $project = $project_services->get_project_by_id($id);

        if(!$project){
            return view("projects.project_not_found");
        };
        
        $deleted_project = $project_services->delete_project($id);

        if($deleted_project){
            return view("projects.project_deleted")->with("deleted_project", $project[0]);
        };
    }
}
