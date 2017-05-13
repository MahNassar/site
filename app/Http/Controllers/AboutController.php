<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\Team;
use App\Repositories\AboutRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AboutController extends AppBaseController
{
    /** @var  AboutRepository */
    private $aboutRepository;

    public function __construct(AboutRepository $aboutRepo)
    {
        $this->aboutRepository = $aboutRepo;
        parent::__construct();
    }

    /**
     * Display a listing of the About.
     *
     * @param Request $request
     * @return Response
     */
    public function getAbout(){
        $abouts = $this->aboutRepository->first();
        $teamItems = Team::all();
       return view('website.about')->with('about',$abouts)->with('teamItems',$teamItems);
    }

    public function index(Request $request)
    {
        $this->aboutRepository->pushCriteria(new RequestCriteria($request));
        $abouts = $this->aboutRepository->all();

        return view('abouts.index')
            ->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new About.
     *
     * @return Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param CreateAboutRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutRequest $request)
    {
        $input = $request->all();
        $image = $request->file('image');
        if ($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['image'] = $photo;
        }


        $about = $this->aboutRepository->create($input);

        Flash::success('About saved successfully.');

        return redirect(route('abouts.index'));
    }

    /**
     * Display the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $about = $this->aboutRepository->findWithoutFail($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        return view('abouts.show')->with('about', $about);
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $about = $this->aboutRepository->findWithoutFail($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        return view('abouts.edit')->with('about', $about);
    }

    /**
     * Update the specified About in storage.
     *
     * @param  int $id
     * @param UpdateAboutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutRequest $request)
    {
        $about = $this->aboutRepository->findWithoutFail($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }
        $input = $request->all();
        $image = $request->file('image');
        if ($image){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName);
            $photo = $imageName;
            $input['image'] = $photo;
        }


        $about = $this->aboutRepository->update($input, $id);

        Flash::success('About updated successfully.');

        return redirect(route('abouts.index'));
    }

    /**
     * Remove the specified About from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $about = $this->aboutRepository->findWithoutFail($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        $this->aboutRepository->delete($id);

        Flash::success('About deleted successfully.');

        return redirect(route('abouts.index'));
    }
}
