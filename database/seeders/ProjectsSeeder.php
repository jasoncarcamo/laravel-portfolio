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
            "skills" => json_encode(["HTML", "JavaScript", "Css"]),
            "date_started" => date("M-d-Y H:i:s"),
            "date_finished" => date("M-d-Y H:i:s"),
            "last_updated" => date("M-d-Y H:i:s"),
            "date_created" => date("M-d-Y H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhweb",
            "category" => "full_stack",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "https://jasoncarcamo.github.io/schoollayout",
            "repo_url" => "https://github.com/jasoncarcamo/schoollayout",
            "skills" => json_encode(["HTML", "JavaScript", "Css"]),
            "date_started" => date("M-d-Y H:i:s"),
            "date_finished" => date("M-d-Y H:i:s"),
            "last_updated" => date("M-d-Y H:i:s"),
            "date_created" => date("M-d-Y H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhwebf",
            "category" => "front_end",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "https://jasoncarcamo.github.io/schoollayout",
            "repo_url" => "khttps://github.com/jasoncarcamo/schoollayout",
            "skills" => json_encode(["HTML", "JavaScript", "Css"]),
            "date_started" => date("M-d-Y H:i:s"),
            "date_finished" => date("M-d-Y H:i:s"),
            "last_updated" => date("M-d-Y H:i:s"),
            "date_created" => date("M-d-Y H:i:s")
        ]);
    }
}
