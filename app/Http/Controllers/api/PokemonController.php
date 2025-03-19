<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PokemonResource;
use App\Http\Requests\StorePokemonRequest;
use App\Services\Interfaces\PokemonServiceInterface;

class PokemonController extends Controller
{   
    protected $pokemonService;

    public function __construct(PokemonServiceInterface $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    public function index()
    {
        $pokemons = $this->pokemonService->getAll();

        return PokemonResource::collection($pokemons);
    }

    public function store(StorePokemonRequest $request)
    {
        $pokemons = $this->pokemonService->create($request->validated());
    
        return new PokemonResource($pokemons);

    }

    public function show(int $id)
    { 
       $pokemons = $this->pokemonService->getById($id);

        return new PokemonResource($pokemons);
    }

    public function update(StorePokemonRequest $request, $id)
    {
        $pokemons = $this->pokemonService->update($request, $id);

        return PokemonResource::collection($pokemons);
    }

    public function destroy(int $id)
    {
        $pokemons = $this->pokemonService->delete($id);

        return PokemonResource::collection($pokemons);
    }
}
