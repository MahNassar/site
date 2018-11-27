<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclintsRequest;
use App\Http\Requests\UpdateclintsRequest;
use App\Repositories\clintsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class clintsController extends AppBaseController
{
    /** @var  clintsRepository */
    private $clintsRepository;

    public function __construct(clintsRepository $clintsRepo)
    {
        $this->clintsRepository = $clintsRepo;
    }

    /**
     * Display a listing of the clints.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clintsRepository->pushCriteria(new RequestCriteria($request));
        $clints = $this->clintsRepository->all();

        return view('clints.index')
            ->with('clints', $clints);
    }

    /**
     * Show the form for creating a new clints.
     *
     * @return Response
     */
    public function create()
    {
        return view('clints.create');
    }

    /**
     * Store a newly created clints in storage.
     *
     * @param CreateclintsRequest $request
     *
     * @return Response
     */
    public function store(CreateclintsRequest $request)
    {
        $input = $request->all();

        $image = $request->file('logo');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partners');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['logo'] = $photo;
        }

        $clints = $this->clintsRepository->create($input);

        Flash::success('Clints saved successfully.');

        return redirect(route('clints.index'));
    }

    /**
     * Display the specified clints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            Flash::error('Clints not found');

            return redirect(route('clints.index'));
        }

        return view('clints.show')->with('clints', $clints);
    }

    /**
     * Show the form for editing the specified clints.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            Flash::error('Clints not found');

            return redirect(route('clints.index'));
        }

        return view('clints.edit')->with('clints', $clints);
    }

    /**
     * Update the specified clints in storage.
     *
     * @param  int $id
     * @param UpdateclintsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclintsRequest $request)
    {
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            Flash::error('Clints not found');

            return redirect(route('clints.index'));
        }

        $input = $request->all();
        $image = $request->file('logo');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partners');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['logo'] = $photo;
        }

        $clints = $this->clintsRepository->update($request->all(), $id);

        Flash::success('Clints updated successfully.');

        return redirect(route('clints.index'));
    }

    /**
     * Remove the specified clints from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clints = $this->clintsRepository->findWithoutFail($id);

        if (empty($clints)) {
            Flash::error('Clints not found');

            return redirect(route('clints.index'));
        }

        $this->clintsRepository->delete($id);

        Flash::success('Clints deleted successfully.');

        return redirect(route('clints.index'));
    }
}
