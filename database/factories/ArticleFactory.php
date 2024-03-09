<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
*/
class ArticleFactory extends Factory
{
    /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
    public function definition(): array
    {

        
        $product_name = $this->faker->unique()->words($nb=2,$asText = true);
        $image_name ='public/images/'. $this->faker->numberBetween(1,4).'.jpg';
        
        return [
            'title' => Str::title($product_name),
            'subtitle' => $this->faker->text(8),
            'body' => $this->faker->text(200),
            'image' => $image_name,
            'user_id' => $this->faker->numberBetween(1,1),
            'category_id' => $this->faker->numberBetween(1,5),  
        ];
    }
}
