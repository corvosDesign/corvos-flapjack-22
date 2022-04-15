<?php

namespace Database\Seeders;
use App\Models\Project;
use App\Models\Proof;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->count(45)
            ->hasProofs(5)
            ->create();


    }
}
