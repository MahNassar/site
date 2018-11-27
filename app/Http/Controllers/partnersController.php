<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepartnersRequest;
use App\Http\Requests\UpdatepartnersRequest;
use App\Repositories\partnersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class partnersController extends AppBaseController
{
    /** @var  partnersRepository */
    private $partnersRepository;

    public function __construct(partnersRepository $partnersRepo)
    {
        $this->partnersRepository = $partnersRepo;
    }

    /**
     * Display a listing of the partners.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->partnersRepository->pushCriteria(new RequestCriteria($request));
        $partners = $this->partnersRepository->all();

        return view('partners.index')
            ->with('partners', $partners);
    }

    /**
     * Show the form for creating a new partners.
     *
     * @return Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created partners in storage.
     *
     * @param CreatepartnersRequest $request
     *
     * @return Response
     */
    public function store(CreatepartnersRequest $request)
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

        $partners = $this->partnersRepository->create($input);

        Flash::success('Partners saved successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified partners.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partners', $partners);
    }

    /**
     * Show the form for editing the specified partners.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partners', $partners);
    }

    /**
     * Update the specified partners in storage.
     *
     * @param  int $id
     * @param UpdatepartnersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepartnersRequest $request)
    {
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
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

        $partners = $this->partnersRepository->update($input, $id);

        Flash::success('Partners updated successfully.');

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified partners from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $partners = $this->partnersRepository->findWithoutFail($id);

        if (empty($partners)) {
            Flash::error('Partners not found');

            return redirect(route('partners.index'));
        }

        $this->partnersRepository->delete($id);

        Flash::success('Partners deleted successfully.');

        return redirect(route('partners.index'));
    }
}
