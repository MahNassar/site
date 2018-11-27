<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeoRequest;
use App\Http\Requests\UpdateSeoRequest;
use App\Repositories\SeoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SeoController extends AppBaseController
{
    /** @var  SeoRepository */
    private $seoRepository;

    public function __construct(SeoRepository $seoRepo)
    {
        $this->seoRepository = $seoRepo;
    }

    /**
     * Display a listing of the Seo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->seoRepository->pushCriteria(new RequestCriteria($request));
        $seos = $this->seoRepository->all();

        return view('seos.index')
            ->with('seos', $seos);
    }

    /**
     * Show the form for creating a new Seo.
     *
     * @return Response
     */
    public function create()
    {
        return view('seos.create');
    }

    /**
     * Store a newly created Seo in storage.
     *
     * @param CreateSeoRequest $request
     *
     * @return Response
     */
    public function store(CreateSeoRequest $request)
    {
        $input = $request->all();

        $seo = $this->seoRepository->create($input);

        Flash::success('Seo saved successfully.');

        return redirect(route('seos.index'));
    }

    /**
     * Display the specified Seo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seo = $this->seoRepository->findWithoutFail($id);

        if (empty($seo)) {
            Flash::error('Seo not found');

            return redirect(route('seos.index'));
        }

        return view('seos.show')->with('seo', $seo);
    }

    /**
     * Show the form for editing the specified Seo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seo = $this->seoRepository->findWithoutFail($id);

        if (empty($seo)) {
            Flash::error('Seo not found');

            return redirect(route('seos.index'));
        }

        return view('seos.edit')->with('seo', $seo);
    }

    /**
     * Update the specified Seo in storage.
     *
     * @param  int $id
     * @param UpdateSeoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeoRequest $request)
    {
        $seo = $this->seoRepository->findWithoutFail($id);

        if (empty($seo)) {
            Flash::error('Seo not found');

            return redirect(route('seos.index'));
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

        $seo = $this->seoRepository->update($input, $id);

        Flash::success('Seo updated successfully.');

        return redirect(route('seos.index'));
    }

    /**
     * Remove the specified Seo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seo = $this->seoRepository->findWithoutFail($id);

        if (empty($seo)) {
            Flash::error('Seo not found');

            return redirect(route('seos.index'));
        }

        $this->seoRepository->delete($id);

        Flash::success('Seo deleted successfully.');

        return redirect(route('seos.index'));
    }
}
