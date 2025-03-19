<?php
namespace App\Repositories\Interfaces;
use App\Models\Pokemon;

/**
 * Interface PokemonRepositoryInterface
 *
 * Defines methods for handling Pokémon-related database operations.
 */
interface PokemonRepositoryInterface
{
    /**
     * Retrieve all Pokemon records.
     *
     * @return array List of all Pokémon.
     */
    public function getAll(): array;

    /**
     * Retrieve a Pokémon by its associated mentor ID.
     *
     * @param int $mentorId The mentor ID associated with the Pokémon.
     * @return Pokemon|null Pokémon details, or null if not found.
     */
    public function getById($mentor_id): ?Pokemon;

    /**
     * Create a new Pokémon record.
     *
     * @param array $attributes Data for the new Pokémon.
     * @return array The created Pokémon information.
     */
    public function create(array $attributes): array;

    /**
     * Update an existing Pokémon record by its ID.
     *
     * @param int $id The ID of the Pokémon to update.
     * @param array $attributes Data to update the Pokémon.
     * @return bool Returns true if the update was successful, false otherwise.
     */
    public function update($id, array $attributes): bool;

    /**
     * Delete a Pokémon record by its ID.
     *
     * @param int $id The ID of the Pokémon to delete.
     * @return bool Returns true if the deletion was successful, false otherwise.
     */
    public function delete($id): bool;
}
