<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MentorResouce;
use App\Http\Requests\StoreMentorRequest;
use App\Services\Interfaces\MentorServiceIntreface;

/**
 * Class MentorController
 *
 * Handles API requests related to Mentor management.
 * Implements CRUD operations using a service layer.
 */
class MentorController extends Controller
{   
    /**
     * @var MentorServiceIntreface $mentorService
     * Service layer for Mentor operations.
     */
    protected $mentorService;

    /**
     * MentorController Constructor.
     * 
     * @param MentorServiceIntreface $mentorService The Mentor service interface.
     */
    public function __construct(MentorServiceIntreface $mentorService)
    {
        $this->mentorService = $mentorService;
    }

    /**
     * Retrieve all mentors.
     * 
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $mentors = $this->mentorService->getAll();

        return MentorResouce::collection($mentors);
    }

    /**
     * Store a new mentor record.
     *
     * @param StoreMentorRequest $request Validated request data.
     * @return MentorResouce The created mentor resource.
     */
    public function Store(StoreMentorRequest $request)
    {
        $mentors = $this->mentorService->create($request->validated());
    
        return new MentorResouce($mentors);

    }

    /**
     * Retrieve mentor details by ID.
     *
     * @param int $id Mentor ID.
     * @return MentorResouce The mentor resource.
     */
    public function show(int $id)
    {
        $mentors = $this->mentorService->getById($id);
        return new MentorResouce($mentors);
    }

}
