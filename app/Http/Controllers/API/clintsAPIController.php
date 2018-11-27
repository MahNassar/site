<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateclintsAPIRequest;
use App\Http\Requests\API\UpdateclintsAPIRequest;
use App\Models\clints;
use App\Repositories\clintsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class clintsController
 * @package App\Http\Controllers\API
 */

class clintsAPIController extends AppBaseController
{
    /** @var  clintsRepository */
    private $clintsRepository;

    public function __construct(clintsRepository $clintsRepo)
    {
        $this->clintsRepository = $clintsRepo;
    }

    /**
     * Display a listing of the clints.
     * GET|HEAD /clints
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clintsRepository->pushCriteria(new RequestCriteria($request));
        $this->clintsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $clints = $this->clintsRepository->all();

        return $this->sendResponse($clints->toArray(), 'Clints retrieved successfully');
    }

    /**
     * Store a newly created clints in storage.
     * POST /clints
     *
     * @param CreateclintsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateclintsAPIRequest $request)
    {
        $input = $request->all();

        $clints = $this->clintsRepository->create($input);

        return $this->sendResponse($clints->toArray(), 'Clints saved successfully');
    }

    /**
     * Display the specified clints.
     * GET|HEAD /clints/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var clints $clints */
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            return $this->sendError('Clints not found');
        }

        return $this->sendResponse($clints->toArray(), 'Clints retrieved successfully');
    }

    /**
     * Update the specified clints in storage.
     * PUT/PATCH /clints/{id}
     *
     * @param  int $id
     * @param UpdateclintsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclintsAPIRequest $request)
    {
        $input = $request->all();

        /** @var clints $clints */
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            return $this->sendError('Clints not found');
        }

        $clints = $this->clintsRepository->update($input, $id);

        return $this->sendResponse($clints->toArray(), 'clints updated successfully');
    }

    /**
     * Remove the specified clints from storage.
     * DELETE /clints/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var clints $clints */
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            return $this->sendError('Clints not found');
        }

        $clints->delete();

        return $this->sendResponse($id, 'Clints deleted successfully');
    }
}
