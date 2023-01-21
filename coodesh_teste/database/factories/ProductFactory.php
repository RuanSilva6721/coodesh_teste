<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code" => 'a',
            "status" => 'a',
            "url" => 'a',
            "creator" => 'a',
            "creator_t" => 'a',
            "last_modified_t" => 'a',
            "product_name" => 'a',
            "quantity" => 'a',
            "brands" => 'a',
            "categories" => 'a',
            "labels" => 'a',
            "cities" => 'a',
            "purchase_places" => 'a',
            "stores" => 'a',
            "ingredients_text" => 'a',
            "traces" => 'a',
            "serving_size" => 'a',
            "serving_quantity" => 1,
            "nutriscore_score" => 1,
            "nutriscore_grade" => 'a', 
            "main_category" => 'a',
            "image_url" => 'a'
        ];
    }
}
