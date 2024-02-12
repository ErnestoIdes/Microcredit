<?php

namespace Database\Factories;
use App\Models\emailsubscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class emailsubscriptionFactory extends Factory
{
    
/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = emailsubscription::class;





    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Fake data
              
              'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
