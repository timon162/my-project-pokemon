<?php
namespace App\Services\Interfaces;

/**
 * Interface MentorServiceInterface
 *
 * Defines methods for managing Mentors.
 */
interface MentorServiceIntreface
{
    
    /**
     * Retrieve all Mentors.
     *
     * @return array List of Mentors.
     */
    public function getAll(): array;

    /**
     * Create a new Mentor.
     *
     * @param array $attributes Data for the new Mentor.
     * @return array The created Mentor information.
     */
    public function create(array $attributes): array;
     
    /**
     * Retrieve details of a Mentor by ID.
     *
     * @param int $id The ID of the Mentor.
     * @return array|null Mentor details, or null if not found.
     */
    public function getById(int $id): ?array;
}