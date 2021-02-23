<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMatiereLevelRequest;
use App\Http\Requests\UpdateMatiereLevelRequest;
use App\Repositories\MatiereLevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MatiereLevelController extends AppBaseController
{
    /** @var  MatiereLevelRepository */
    private $matiereLevelRepository;

    public function __construct(MatiereLevelRepository $matiereLevelRepo)
    {
        $this->matiereLevelRepository = $matiereLevelRepo;
    }

    /**
     * Display a listing of the MatiereLevel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matiereLevels = $this->matiereLevelRepository->all();

        return view('matiere_levels.index')
            ->with('matiereLevels', $matiereLevels);
    }

    /**
     * Show the form for creating a new MatiereLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('matiere_levels.create');
    }

    /**
     * Store a newly created MatiereLevel in storage.
     *
     * @param CreateMatiereLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateMatiereLevelRequest $request)
    {
        $input = $request->all();

        $matiereLevel = $this->matiereLevelRepository->create($input);

        Flash::success('Matiere Level saved successfully.');

        return redirect(route('matiereLevels.index'));
    }

    /**
     * Display the specified MatiereLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matiereLevel = $this->matiereLevelRepository->find($id);

        if (empty($matiereLevel)) {
            Flash::error('Matiere Level not found');

            return redirect(route('matiereLevels.index'));
        }

        return view('matiere_levels.show')->with('matiereLevel', $matiereLevel);
    }

    /**
     * Show the form for editing the specified MatiereLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matiereLevel = $this->matiereLevelRepository->find($id);

        if (empty($matiereLevel)) {
            Flash::error('Matiere Level not found');

            return redirect(route('matiereLevels.index'));
        }

        return view('matiere_levels.edit')->with('matiereLevel', $matiereLevel);
    }

    /**
     * Update the specified MatiereLevel in storage.
     *
     * @param int $id
     * @param UpdateMatiereLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatiereLevelRequest $request)
    {
        $matiereLevel = $this->matiereLevelRepository->find($id);

        if (empty($matiereLevel)) {
            Flash::error('Matiere Level not found');

            return redirect(route('matiereLevels.index'));
        }

        $matiereLevel = $this->matiereLevelRepository->update($request->all(), $id);

        Flash::success('Matiere Level updated successfully.');

        return redirect(route('matiereLevels.index'));
    }

    /**
     * Remove the specified MatiereLevel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matiereLevel = $this->matiereLevelRepository->find($id);

        if (empty($matiereLevel)) {
            Flash::error('Matiere Level not found');

            return redirect(route('matiereLevels.index'));
        }

        $this->matiereLevelRepository->delete($id);

        Flash::success('Matiere Level deleted successfully.');

        return redirect(route('matiereLevels.index'));
    }
}
