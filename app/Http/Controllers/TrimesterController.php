<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrimesterRequest;
use App\Http\Requests\UpdateTrimesterRequest;
use App\Repositories\TrimesterRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrimesterController extends AppBaseController
{
    /** @var  TrimesterRepository */
    private $trimesterRepository;

    public function __construct(TrimesterRepository $trimesterRepo)
    {
        $this->trimesterRepository = $trimesterRepo;
    }

    /**
     * Display a listing of the Trimester.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trimesters = $this->trimesterRepository->all();

        return view('trimesters.index')
            ->with('trimesters', $trimesters);
    }

    /**
     * Show the form for creating a new Trimester.
     *
     * @return Response
     */
    public function create()
    {
        return view('trimesters.create');
    }

    /**
     * Store a newly created Trimester in storage.
     *
     * @param CreateTrimesterRequest $request
     *
     * @return Response
     */
    public function store(CreateTrimesterRequest $request)
    {
        $input = $request->all();

        $trimester = $this->trimesterRepository->create($input);

        Flash::success('Trimester saved successfully.');

        return redirect(route('trimesters.index'));
    }

    /**
     * Display the specified Trimester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trimester = $this->trimesterRepository->find($id);

        if (empty($trimester)) {
            Flash::error('Trimester not found');

            return redirect(route('trimesters.index'));
        }

        return view('trimesters.show')->with('trimester', $trimester);
    }

    /**
     * Show the form for editing the specified Trimester.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trimester = $this->trimesterRepository->find($id);

        if (empty($trimester)) {
            Flash::error('Trimester not found');

            return redirect(route('trimesters.index'));
        }

        return view('trimesters.edit')->with('trimester', $trimester);
    }

    /**
     * Update the specified Trimester in storage.
     *
     * @param int $id
     * @param UpdateTrimesterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrimesterRequest $request)
    {
        $trimester = $this->trimesterRepository->find($id);

        if (empty($trimester)) {
            Flash::error('Trimester not found');

            return redirect(route('trimesters.index'));
        }

        $trimester = $this->trimesterRepository->update($request->all(), $id);

        Flash::success('Trimester updated successfully.');

        return redirect(route('trimesters.index'));
    }

    /**
     * Remove the specified Trimester from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trimester = $this->trimesterRepository->find($id);

        if (empty($trimester)) {
            Flash::error('Trimester not found');

            return redirect(route('trimesters.index'));
        }

        $this->trimesterRepository->delete($id);

        Flash::success('Trimester deleted successfully.');

        return redirect(route('trimesters.index'));
    }
}
