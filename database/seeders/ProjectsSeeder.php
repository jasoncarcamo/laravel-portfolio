<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "title" => "jhwebfjhewbhjfq",
            "category" => "react_native",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "https://jasoncarcamo.github.io/schoollayout",
            "repo_url" => "https://github.com/jasoncarcamo/schoollayout",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhweb",
            "category" => "full_stack",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "https://jasoncarcamo.github.io/schoollayout",
            "repo_url" => "https://github.com/jasoncarcamo/schoollayout",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhwebf",
            "category" => "front_end",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "https://jasoncarcamo.github.io/schoollayout",
            "repo_url" => "khttps://github.com/jasoncarcamo/schoollayout",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);
    }
}
