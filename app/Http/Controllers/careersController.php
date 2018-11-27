<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecareersRequest;
use App\Http\Requests\UpdatecareersRequest;
use App\Repositories\careersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class careersController extends AppBaseController
{
    /** @var  careersRepository */
    private $careersRepository;

    public function __construct(careersRepository $careersRepo)
    {
        $this->careersRepository = $careersRepo;
    }

    /**
     * Display a listing of the careers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->careersRepository->pushCriteria(new RequestCriteria($request));
        $careers = $this->careersRepository->all();

        return view('careers.index')
            ->with('careers', $careers);
    }

    /**
     * Show the form for creating a new careers.
     *
     * @return Response
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created careers in storage.
     *
     * @param CreatecareersRequest $request
     *
     * @return Response
     */
    public function store(CreatecareersRequest $request)
    {
        $input = $request->all();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partners');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['image'] = $photo;
        }
        $careers = $this->careersRepository->create($input);

        Flash::success('Careers saved successfully.');

        return redirect(route('careers.index'));
    }

    /**
     * Display the specified careers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            Flash::error('Careers not found');

            return redirect(route('careers.index'));
        }

        return view('careers.show')->with('careers', $careers);
    }

    /**
     * Show the form for editing the specified careers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            Flash::error('Careers not found');

            return redirect(route('careers.index'));
        }

        return view('careers.edit')->with('careers', $careers);
    }

    /**
     * Update the specified careers in storage.
     *
     * @param  int $id
     * @param UpdatecareersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecareersRequest $request)
    {
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            Flash::error('Careers not found');

            return redirect(route('careers.index'));
        }

        $input = $request->all();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partners');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['image'] = $photo;
        }
        $careers = $this->careersRepository->update($input, $id);

        Flash::success('Careers updated successfully.');

        return redirect(route('careers.index'));
    }

    /**
     * Remove the specified careers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $careers = $this->careersRepository->findWithoutFail($id);

        if (empty($careers)) {
            Flash::error('Careers not found');

            return redirect(route('careers.index'));
        }

        $this->careersRepository->delete($id);

        Flash::success('Careers deleted successfully.');

        return redirect(route('careers.index'));
    }
}
