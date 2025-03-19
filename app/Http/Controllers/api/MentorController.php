<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MentorResouce;
use App\Http\Requests\StoreMentorRequest;
use App\Services\Interfaces\MentorServiceIntreface;

class MentorController extends Controller
{   
    protected $mentorService;

    public function __construct(MentorServiceIntreface $mentorService)
    {
        $this->mentorService = $mentorService;
    }

    public function index()
    {
        $mentors = $this->mentorService->getAll();

        return MentorResouce::collection($mentors);
    }

    public function Store(StoreMentorRequest $request)
    {
        $mentors = $this->mentorService->create($request->validated());
    
        return new MentorResouce($mentors);

    }

    public function show(int $id)
    {
        $mentors = $this->mentorService->getById($id);
        return new MentorResouce($mentors);
    }

}
