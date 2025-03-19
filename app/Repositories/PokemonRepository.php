<?php
namespace App\Repositories;
use App\Models\Pokemon;
use App\Repositories\Interfaces\PokemonRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PokemonRepository
 *
 * Handles database operations related to Pokémon.
 */
class PokemonRepository implements PokemonRepositoryInterface
{
    /**
     * Retrieve all Pokémon records.
     *
     * @return array
     */
    public function getAll(): array
    {
        return Pokemon::all()->toArray();
    }

    /**
     * Retrieve a Pokémon by its mentor ID.
     *
     * @param int $mentorId The mentor ID associated with the Pokémon.
     * @return Pokemon|null The Pokémon record, or null if not found.
     */
    public function getById($mentor_id): ?Pokemon
    {
        return Pokemon::where('mentor_id', $mentor_id)->first();
    }

    /**
     * Create a new Pokémon record.
     *
     * @param array $attributes Data for the new Pokémon.
     * @return array The created Pokémon instance.
     */
    public function create(array $attributes): array
    {
        return Pokemon::create($attributes)->toArray();
    }

    /**
     * Update an existing Pokémon record by its ID.
     *
     * @param int $id The ID of the Pokémon to update.
     * @param array $attributes Data to update the Pokémon.
     * @return bool Returns true if the update was successful, false otherwise.
     */
    public function update($id, array $attributes): bool
    {
        return Pokemon::find($id)->update($attributes);
    }

    /**
     * Delete a Pokémon record by its ID.
     *
     * @param int $id The ID of the Pokémon to delete.
     * @return bool Returns true if the deletion was successful, false otherwise.
     */
    public function delete($id): bool
    {
        return Pokemon::find($id)->delete();
    }
}