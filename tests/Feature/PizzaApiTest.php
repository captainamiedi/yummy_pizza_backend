<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Pizza;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PizzaApiTest extends TestCase
{
    // use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;
    use RefreshDatabase;

    /**
     * @test
     */
    public function test_create_pizza()
    {
        $pizza = factory(Pizza::class)->make()->toArray();

        // $this->response = $this->json(
        //     'POST',
        //     '/api/pizzas', $pizza
        // );
        $this->postJson('/api/pizzas', $pizza)
        ->assertStatus(200)
        ->assertJsonStructure([
            "success",
            "data" => [
                "title",
                "image",
                "price",
                "description",
                "variations",
                "trad_toppings",
                "updated_at",
                "created_at",
                "id",
                "in_cart",
                "count",
                "total"
            ],
            "message"
        ])
        ->assertSuccessful();
        // $this->assertApiResponse($pizza);
    }

    /**
     * @test
     */
    public function test_read_pizza()
    {
        $pizza = factory(Pizza::class)->make();
        
         $this->getJson(
            '/api/pizzas/'.$pizza->id
        )
        ->assertStatus(200)
        ->assertSuccessful();
        // $this->assertApiResponse($pizza->toArray());
    }

    /**
     * @test
     */
    public function test_delete_pizza()
    {
        $pizza = factory(Pizza::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/pizzas/'.$pizza->id
         );

        // $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/pizzas/'.$pizza->id
        );
        $this->response->assertStatus(404);
    }
}
