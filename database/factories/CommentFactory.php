<?php

namespace Database\Factories;

use App\Models\Proof;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'comment'=> $this->faker->paragraph(),
            'proof_id'=>Proof::all()->where('id')->random(),

        ];
    }
}
