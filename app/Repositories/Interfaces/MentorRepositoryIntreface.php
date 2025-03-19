<?php
namespace App\Repositories\Interfaces;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Mentor;
/**
 * Interface MentorRepositoryInterface
 *
 * Defines methods for handling Mentor-related database operations.
*/
interface MentorRepositoryIntreface
{
    /**
     * Retrieve all Mentor records.
     *
     * @return Collection
    */
    public function getAll(): Collection;

    /**
     * Create a new Mentor record.
     *
     * @param array $attributes Data for the new Mentor.
     * @return array The created Mentor information.
    */
    public function create(array $attributes): array;

    /**
     * Retrieve a Mentor by its ID.
     *
     * @param int $id The ID of the Mentor.
     * @return array|null Mentor details, or null if not found.
    */
    public function getById($id): array;
}    