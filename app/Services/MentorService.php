<?php
namespace App\Services;
use App\Repositories\Interfaces\MentorRepositoryIntreface;
use App\Services\Interfaces\MentorServiceIntreface;
use App\Repositories\Interfaces\PokemonRepositoryInterface;

/**
 * Class MentorService
 *
 * This class provides services related to Mentor management.
 */
class MentorService implements MentorServiceIntreface
{

      /**
     * @var MentorRepositoryInterface The repository instance for handling Mentor data.
     */
    protected $mentorRepository;

    /**
     * MentorService constructor.
     *
     * @param MentorRepositoryInterface $mentorRepository The repository instance for Mentor data operations.
     */
    public function __construct(MentorRepositoryIntreface $mentorRepository)
    {
        $this->mentorRepository = $mentorRepository;
    }

    /**
     * Retrieve all mentors.
     *
     * @return array List of mentors.
     */
    public function getAll(): array
    {
        return $this->mentorRepository->getAll();
    }

    /**
     * Create a new mentor.
     *
     * @param array $attributes Data for the new mentor.
     * @return array The created mentor information.
     */
    public function create(array $attributes): array
    {
        return $this->mentorRepository->create($attributes);
    }

  /**
     * Retrieve a mentor by their ID.
     *
     * @param int $id The ID of the mentor.
     * @return array|null The mentor details, or null if not found.
     */
    public function getById(int $id): ?array
    {
        return $this->mentorRepository->getById($id);
    }


}