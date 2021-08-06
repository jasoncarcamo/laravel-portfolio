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
        $created_project = DB::insert("insert into projects (title, description, images, live_url, repo_url, date_started, date_finished, last_updated, date_created) values (?, ?, ?, ?, ?, ?, ?, ?, ?);", [$new_project]);

        return $created_project;
    }

    public function update_project($update_project, $id){
        $updated_project = DB::update("update projects set title = ?, description = ?, images = ?, live_url = ?, repo_url = ?, date_started = ?, date_finished = ?, last_updated = ?, date_created = ? where id = ?",[$update_project, $id]);

        return $updated_project;
    }

    public function delete_project($id){
        $deleted_project =  DB::delete("delete from projects where id = ?", [$id]);

        return $deleted_project;
    }
}