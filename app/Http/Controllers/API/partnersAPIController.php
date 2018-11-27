<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepartnersAPIRequest;
use App\Http\Requests\API\UpdatepartnersAPIRequest;
use App\Models\partners;
use App\Repositories\partnersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class partnersController
 * @package App\Http\Controllers\API
 */

class partnersAPIController extends AppBaseController
{
    /** @var  partnersRepository */
    private $partnersRepository;

    public function __construct(partnersRepository $partnersRepo)
    {
        $this->partnersRepository = $partnersRepo;
    }

    /**
     * Display a listing of the partners.
     * GET|HEAD /partners
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->partnersRepository->pushCriteria(new RequestCriteria($request));
        $this->partnersRepository->pushCriteria(new LimitOffsetCriteria($request));
        $partners = $this->partnersRepository->all();

        return $this->sendResponse($partners->toArray(), 'Partners retrieved successfully');
    }

    /**
     * Store a newly created partners in storage.
     * POST /partners
     *
     * @param CreatepartnersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepartnersAPIRequest $request)
    {
        $input = $request->all();

        $partners = $this->partnersRepository->create($input);

        return $this->sendResponse($partners->toArray(), 'Partners saved successfully');
    }

    /**
     * Display the specified partners.
     * GET|HEAD /partners/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var partners $partners */
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            return $this->sendError('Partners not found');
        }

        return $this->sendResponse($partners->toArray(), 'Partners retrieved successfully');
    }

    /**
     * Update the specified partners in storage.
     * PUT/PATCH /partners/{id}
     *
     * @param  int $id
     * @param UpdatepartnersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepartnersAPIRequest $request)
    {
        $input = $request->all();

        /** @var partners $partners */
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            return $this->sendError('Partners not found');
        }

        $partners = $this->partnersRepository->update($input, $id);

        return $this->sendResponse($partners->toArray(), 'partners updated successfully');
    }

    /**
     * Remove the specified partners from storage.
     * DELETE /partners/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var partners $partners */
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            return $this->sendError('Partners not found');
        }

        $partners->delete();

        return $this->sendResponse($id, 'Partners deleted successfully');
    }
}
