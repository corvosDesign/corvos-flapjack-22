<?php

namespace Database\Factories;

use App\Models\Proof;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


class ProofFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proof::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'filename'=>$this->faker->mimeType(),
            'project_id'=>Project::all()->where('id')->random(),
            'approved'=> $this->faker->boolean(),
            //
        ];
    }
}
