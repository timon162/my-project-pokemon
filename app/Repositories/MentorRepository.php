<?php
namespace App\Repositories;
use App\Models\Mentor;
use App\Repositories\Interfaces\MentorRepositoryIntreface;
use Illuminate\Database\Eloquent\Collection;
/**
 * Class MentorRepository
 *
 * Handles database operations related to Mentors.
 */
class MentorRepository implements MentorRepositoryIntreface
{

    /**
     * Retrieve all Mentors along with their related Pokémon.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Mentor::with('Pokemon')->get();
    }

    /** 
     * Create a new Mentor record.
     *
     * @param array $attributes Data for the new Mentor.
     * @return array The created Mentor instance.
     */
    public function create(array $attributes): array
    {
        return Mentor::create($attributes)->toArray();
    }
  
    /**
     * Retrieve a Mentor by its ID along with its related Pokémon.
     *
     * @param int $id The ID of the Mentor.
     * @return array|null The Mentor record with Pokemon, or null if not found.
     */
    public function getById($id): array
    {
        return Mentor::where('id', $id)->with('Pokemon')->first()->toArray();
    }

}