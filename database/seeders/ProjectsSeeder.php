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
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "nkjknfj2",
            "repo_url" => "kjbejfq2",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhweb",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "nkjknfj2",
            "repo_url" => "kjbejfq2",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);

        DB::table('projects')->insert([
            "title" => "jhwebf",
            "description" => "nfwejfew",
            "images" => "bkwebfef",
            "live_url" => "nkjknfj2",
            "repo_url" => "kjbejfq2",
            "date_started" => date("Y-m-d H:i:s"),
            "date_finished" => date("Y-m-d H:i:s"),
            "last_updated" => date("Y-m-d H:i:s"),
            "date_created" => date("Y-m-d H:i:s")
        ]);
    }
}
