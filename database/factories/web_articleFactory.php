<?php

namespace Database\Factories;
use App\Models\web_article;
use Illuminate\Database\Eloquent\Factories\Factory;

class web_articleFactory extends Factory
{
/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = web_article::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Fake data  
            'title' => $this->faker->text(8),
            'created_by' => $this->faker->name(),
            'body' =>$this->faker->sentence(3000),
            //'cover_page' =>$this->$faker->image('images',400, 300),
        ];
    }
}
