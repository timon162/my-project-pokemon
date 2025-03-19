<?php
namespace App\Services\Interfaces;

/**
 * Interface PokemonServiceInterface
 *
 * Defines methods for managing Pokémon-related services.
 */
interface PokemonServiceInterface
{   
    
    /**
     * Retrieve all Pokémon.
     *
     * @return array List of Pokémon.
     */
    public function getAll(): array;

    /**
     * Retrieve details of a Pokémon by ID.
     *
     * @param int $pokemonId The ID of the Pokémon.
     * @return array|null Pokémon details, or null if not found.
     */
    public function getById($mentor_id): ?array;
    
    /**
     * Create a new Pokémon.
     *
     * @param array $attributes Data for the new Pokémon.
     * @return array The created Pokémon information.
     */
    public function create(array $attributes): array;

    /**
     * Update the details of a Pokémon by ID.
     *
     * @param int $id The ID of the Pokémon to update.
     * @param array $attributes Data to update the Pokémon.
     * @return bool Returns true if the update was successful, false otherwise.
     */
    public function update($id, array $attributes): bool;

   /**
     * Delete a Pokémon by ID.
     *
     * @param int $id The ID of the Pokémon to delete.
     * @return bool Returns true if the deletion was successful, false otherwise.
     */
    public function delete($id): bool;
}