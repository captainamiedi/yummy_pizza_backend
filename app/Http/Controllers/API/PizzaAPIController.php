<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePizzaAPIRequest;
use App\Http\Requests\API\UpdatePizzaAPIRequest;
use App\Models\Pizza;
use App\Repositories\PizzaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PizzaController
 * @package App\Http\Controllers\API
 */

class PizzaAPIController extends AppBaseController
{
    /** @var  PizzaRepository */
    private $pizzaRepository;

    public function __construct(PizzaRepository $pizzaRepo)
    {
        $this->pizzaRepository = $pizzaRepo;
    }

    /**
     * Display a listing of the Pizza.
     * GET|HEAD /pizzas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $pizzas = $this->pizzaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($pizzas->toArray(), 'Pizzas retrieved successfully');
    }

    /**
     * Store a newly created Pizza in storage.
     * POST /pizzas
     *
     * @param CreatePizzaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePizzaAPIRequest $request)
    {
        $input = $request->all();

        $pizza = $this->pizzaRepository->create($input);

        return $this->sendResponse($pizza->toArray(), 'Pizza saved successfully');
    }

    /**
     * Display the specified Pizza.
     * GET|HEAD /pizzas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pizza $pizza */
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            return $this->sendError('Pizza not found');
        }

        return $this->sendResponse($pizza->toArray(), 'Pizza retrieved successfully');
    }

    /**
     * Update the specified Pizza in storage.
     * PUT/PATCH /pizzas/{id}
     *
     * @param int $id
     * @param UpdatePizzaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePizzaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pizza $pizza */
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            return $this->sendError('Pizza not found');
        }

        $pizza = $this->pizzaRepository->update($input, $id);

        return $this->sendResponse($pizza->toArray(), 'Pizza updated successfully');
    }

    /**
     * Remove the specified Pizza from storage.
     * DELETE /pizzas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pizza $pizza */
        $pizza = $this->pizzaRepository->find($id);

        if (empty($pizza)) {
            return $this->sendError('Pizza not found');
        }

        $pizza->delete();

        return $this->sendSuccess('Pizza deleted successfully');
    }
}
