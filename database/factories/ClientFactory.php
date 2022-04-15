<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class ClientFactory extends Factory
{
   /**
       * The name of the factory's corresponding model.
       *
       * @var string
       */
      protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address_line1' =>$this->faker->address(),
            'phone'=> $this->faker->phoneNumber(),
            'extension'=> $this->faker->numberBetween(100,999),
        ];
    }
}
