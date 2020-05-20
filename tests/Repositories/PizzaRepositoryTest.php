<?php namespace Tests\Repositories;

use App\Models\Pizza;
use App\Repositories\PizzaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PizzaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PizzaRepository
     */
    protected $pizzaRepo;

    // public function setUp() : void
    // {
    //     parent::setUp();
    //     $this->pizzaRepo = \App::make(PizzaRepository::class);
    // }

    // /**
    //  * @test create
    //  */
    // public function test_create_pizza()
    // {
    //     $pizza = factory(Pizza::class)->make()->toArray();

    //     $createdPizza = $this->pizzaRepo->create($pizza);

    //     $createdPizza = $createdPizza->toArray();
    //     $this->assertArrayHasKey('id', $createdPizza);
    //     $this->assertNotNull($createdPizza['id'], 'Created Pizza must have id specified');
    //     $this->assertNotNull(Pizza::find($createdPizza['id']), 'Pizza with given id must be in DB');
    //     $this->assertModelData($pizza, $createdPizza);
    // }

    // /**
    //  * @test read
    //  */
    // public function test_read_pizza()
    // {
    //     $pizza = factory(Pizza::class)->create();

    //     $dbPizza = $this->pizzaRepo->find($pizza->id);

    //     $dbPizza = $dbPizza->toArray();
    //     $this->assertModelData($pizza->toArray(), $dbPizza);
    // }

    // /**
    //  * @test update
    //  */
    // public function test_update_pizza()
    // {
    //     $pizza = factory(Pizza::class)->create();
    //     $fakePizza = factory(Pizza::class)->make()->toArray();

    //     $updatedPizza = $this->pizzaRepo->update($fakePizza, $pizza->id);

    //     $this->assertModelData($fakePizza, $updatedPizza->toArray());
    //     $dbPizza = $this->pizzaRepo->find($pizza->id);
    //     $this->assertModelData($fakePizza, $dbPizza->toArray());
    // }

    // /**
    //  * @test delete
    //  */
    // public function test_delete_pizza()
    // {
    //     $pizza = factory(Pizza::class)->create();

    //     $resp = $this->pizzaRepo->delete($pizza->id);

    //     $this->assertTrue($resp);
    //     $this->assertNull(Pizza::find($pizza->id), 'Pizza should not exist in DB');
    // }
}
