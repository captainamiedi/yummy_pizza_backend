<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Pizza;

class PizzaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_pizza()
    {
        $pizza = factory(Pizza::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/pizzas', $pizza
        );

        $this->assertApiResponse($pizza);
    }

    /**
     * @test
     */
    public function test_read_pizza()
    {
        $pizza = factory(Pizza::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/pizzas/'.$pizza->id
        );

        $this->assertApiResponse($pizza->toArray());
    }

    /**
     * @test
     */
    public function test_update_pizza()
    {
        $pizza = factory(Pizza::class)->create();
        $editedPizza = factory(Pizza::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/pizzas/'.$pizza->id,
            $editedPizza
        );

        $this->assertApiResponse($editedPizza);
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

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/pizzas/'.$pizza->id
        );

        $this->response->assertStatus(404);
    }
}
