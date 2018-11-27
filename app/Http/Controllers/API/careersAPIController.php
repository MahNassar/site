<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecareersAPIRequest;
use App\Http\Requests\API\UpdatecareersAPIRequest;
use App\Models\careers;
use App\Repositories\careersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class careersController
 * @package App\Http\Controllers\API
 */

class careersAPIController extends AppBaseController
{
    /** @var  careersRepository */
    private $careersRepository;

    public function __construct(careersRepository $careersRepo)
    {
        $this->careersRepository = $careersRepo;
    }

    /**
     * Display a listing of the careers.
     * GET|HEAD /careers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->careersRepository->pushCriteria(new RequestCriteria($request));
        $this->careersRepository->pushCriteria(new LimitOffsetCriteria($request));
        $careers = $this->careersRepository->all();

        return $this->sendResponse($careers->toArray(), 'Careers retrieved successfully');
    }

    /**
     * Store a newly created careers in storage.
     * POST /careers
     *
     * @param CreatecareersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecareersAPIRequest $request)
    {
        $input = $request->all();

        $careers = $this->careersRepository->create($input);

        return $this->sendResponse($careers->toArray(), 'Careers saved successfully');
    }

    /**
     * Display the specified careers.
     * GET|HEAD /careers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var careers $careers */
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            return $this->sendError('Careers not found');
        }

        return $this->sendResponse($careers->toArray(), 'Careers retrieved successfully');
    }

    /**
     * Update the specified careers in storage.
     * PUT/PATCH /careers/{id}
     *
     * @param  int $id
     * @param UpdatecareersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecareersAPIRequest $request)
    {
        $input = $request->all();

        /** @var careers $careers */
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            return $this->sendError('Careers not found');
        }

        $careers = $this->careersRepository->update($input, $id);

        return $this->sendResponse($careers->toArray(), 'careers updated successfully');
    }

    /**
     * Remove the specified careers from storage.
     * DELETE /careers/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var careers $careers */
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            return $this->sendError('Careers not found');
        }

        $careers->delete();

        return $this->sendResponse($id, 'Careers deleted successfully');
    }
}
