<?php 
namespace App\Services;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use App\Services\Interfaces\PokemonServiceInterface;


/**
 * Class PokemonService
 *
 * This class provides services related to Pokémon management.
 */
class PokemonService implements PokemonServiceInterface
{
      /**
     * @var PokemonRepositoryInterface The repository instance for handling Pokémon data.
     */
    protected $pokemonRepository;

    /**
     * PokemonService constructor.
     *
     * @param PokemonRepositoryInterface $pokemonRepository The repository instance for Pokémon data operations.
     */
    public function __construct(PokemonRepositoryInterface $pokemonRepository)
    {
        $this->pokemonRepository = $pokemonRepository;
    }

    /**
     * Retrieve all Pokémon.
     *
     * @return array List of all Pokémon.
     */
    public function getAll(): array
    {
        return $this->pokemonRepository->getAll();
    }

    /**
     * Retrieve a Pokémon by its ID.
     *
     * @param int $id The ID of the Pokémon.
     * @return array|null The Pokémon details, or null if not found.
     */
    public function getById($id): ?array
    {
        return $this->pokemonRepository->getById($id);
    }

    /**
     * Create a new Pokémon.
     *
     * @param array $attributes Data for the new Pokémon.
     * @return array The created Pokémon information.
     */
    public function create(array $attributes): array
    {
        return $this->pokemonRepository->create($attributes);
    }   

    /**
     * Update an existing Pokémon by its ID.
     *
     * @param int $id The ID of the Pokémon to update.
     * @param array $attributes Data to update the Pokémon.
     * @return bool Returns true if the update was successful, false otherwise.
     */
    public function update($id, array $attributes): bool
    {
        return $this->pokemonRepository->update($id, $attributes);
    }

    /**
     * Delete a Pokémon by its ID.
     *
     * @param int $id The ID of the Pokémon to delete.
     * @return bool Returns true if the deletion was successful, false otherwise.
     */
    public function delete($id): bool
    {
        return $this->pokemonRepository->delete($id);
    }
}