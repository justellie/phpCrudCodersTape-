<?php

namespace Database\Factories;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostumerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Costumer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'active'=>1,
            'company_id'=>\App\Models\Company::factory()->create()->id,
        ];
        

    }
}
