<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ProjectsServices
{
    public $props = [];

    public function get_props(){
        return $this->props;
    }

    public function set_prop($prop_target, $value){
        $this->prop[$prop_target] = $value;
    }

    public function set_props($request){
        $new_props = [
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "images" => $request->input("images"),
            "live_url" => $request->input("live_url"),
            "repo_url" => $request->input("repo_url"),
            "date_started" => $request->input("date_started"),
            "date_finished" => $request->input("date_finished"),
            "last_updated" => $request->input("last_updated"),
            "date_created" => $request->input("date_created")
        ];

        if($request->input("id")){
            $new_props["id"] = $request->input("id");
        };

        $this->props = $new_props;

        return $this->props;
    }

    public function get_projects(){
        $projects = DB::select("select * from projects;");

        return $projects;
    }

    public function get_project_by_id($id){
        $project = DB::select("select * from projects where id = ?", [$id]);

        return $project;
    }

    public function create_project($new_project){
        $create_project = [
            'title' => $new_project["title"],
            'description' => $new_project["description"],
            'images' => $new_project["images"],
            'live_url' => $new_project["live_url"],
            'repo_url' => $new_project["repo_url"],
            "date_started" => $new_project["date_started"],
            'date_finished' => $new_project["date_finished"],
            'last_updated' => $new_project["last_updated"],
            "date_created" => $new_project["date_created"]
        ];
        $created_project = DB::table("projects")->insertGetId($create_project);

        if($created_project){
            $create_project["id"] = $created_project;

            return $create_project;
        };

        return $created_project;
    }

    public function update_project($update_project, $id){
        $project = [
            "id" => $id,
            'title' => $update_project["title"],
            'description' => $update_project["description"],
            'images' => $update_project["images"],
            'live_url' => $update_project["live_url"],
            'repo_url' => $update_project["repo_url"],
            "date_started" => $update_project["date_started"],
            'date_finished' => $update_project["date_finished"],
            'last_updated' => date("Y-m-d H:i:s"),
            "date_created" => $update_project["date_created"]
        ];
        $updated_project = DB::table("projects")->where("id", $id)->update($project);

        if($updated_project){
            return $project;
        };

        return $updated_project;
    }

    public function delete_project($id){
        $deleted_project =  DB::delete("delete from projects where id = ?", [$id]);

        return $deleted_project;
    }
}