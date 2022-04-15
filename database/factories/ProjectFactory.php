<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_title'=> $this->faker->words(2, true),
            'open'=> $this->faker->boolean(),
            'project_start'=> $this->faker->date(),
            'client_id'=>Client::all()->where('id')->random(),

        ];
    }
}
