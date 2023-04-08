<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Action;
use App\Models\File;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $project = Project::create([
        //     'project_type' => 'Strategic Project',
        //     'title' => 'Project One'
        // ]);

        // ProjectUser::create([
        //     'user_id' => 1,
        //     'project_id' => $project->id
        // ]);

        // // Action
        // Action::create([
        //     'title' => 'Action One',
        //     'user_id' => 1,
        //     'project_id' => $project->id
        // ]);

        // File
        File::create([
            'name' => 'File Two',
            'project_id' => 1
        ]);


        // $this->call(ActionSeeder::class);
    }
}
