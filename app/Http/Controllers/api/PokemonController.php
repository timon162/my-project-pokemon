<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonResource;
use App\Http\Requests\StorePokemonRequest;
use App\Services\Interfaces\PokemonServiceInterface;

/**
 * Class PokemonController
 * 
 * This controller handles API requests related to Pokémon management.
 * It provides methods for retrieving, creating, updating, and deleting Pokémon records.
 */
class PokemonController extends Controller
{   

    /**
     * @var PokemonServiceInterface
     * Service layer for handling Pokémon-related logic.
     */
    protected $pokemonService;

    /**
     * Constructor to inject the Pokémon service dependency.
     *
     * @param PokemonServiceInterface $pokemonService
     */
    public function __construct(PokemonServiceInterface $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    /**
     * Retrieve all Pokémon records.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $pokemons = $this->pokemonService->getAll();

        return PokemonResource::collection($pokemons);
    }

    /**
     * Store a newly created Pokémon record.
     *
     * @param StorePokemonRequest $request Validated request data.
     * @return PokemonResource The created Pokémon resource.
     */
    public function store(StorePokemonRequest $request)
    {
        $pokemons = $this->pokemonService->create($request->validated());
    
        return new PokemonResource($pokemons);

    }

    /**
     * Display the specified Pokémon record.
     *
     * @param int $id Pokémon ID.
     * @return PokemonResource
     */
    public function show(int $id)
    { 
       $pokemons = $this->pokemonService->getById($id);

        return new PokemonResource($pokemons);
    }

    /**
     * Update the specified Pokémon record.
     *
     * @param StorePokemonRequest $request Validated request data.
     * @param int $id Pokémon ID.
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection Updated Pokémon resource.
     */
    public function update(StorePokemonRequest $request, $id)
    {
        $pokemons = $this->pokemonService->update($request, $id);

        return PokemonResource::collection($pokemons);
    }

    /**
     * Remove the specified Pokémon record from storage.
     *
     * @param int $id Pokémon ID.
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection Deleted Pokémon resource.
     */
    public function destroy(int $id)
    {
        $pokemons = $this->pokemonService->delete($id);

        return PokemonResource::collection($pokemons);
    }
}
