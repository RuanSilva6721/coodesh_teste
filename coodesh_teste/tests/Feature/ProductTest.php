<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $response = $this->get('/api/products');


        // $response->assertJson(function(AssertableJson $json){
        //     $json->has('data')
        //     ->missing('message');
        // });
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Host' => 'localhost:8000'
        ])->get('/api/products');
        $response->assertSuccessful();
}

public function test_example2()
{
    //Product::factory(10)->create();

    $response = $this->post('/api/products', [
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
        "main_category" => 'ak',
        "image_url" => 'akk',
    ]);

    $response->assertStatus(201);
}

}
