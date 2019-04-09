<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterateRequest;
use App\Http\Requests\UpdaterateRequest;
use App\Repositories\rateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class rateController extends AppBaseController
{
    /** @var  rateRepository */
    private $rateRepository;

    public function __construct(rateRepository $rateRepo)
    {
        $this->rateRepository = $rateRepo;
    }

    /**
     * Display a listing of the rate.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $rates = $this->rateRepository->all();

        return view('rates.index')
            ->with('rates', $rates);
    }

    /**
     * Show the form for creating a new rate.
     *
     * @return Response
     */
    public function create()
    {
        return view('rates.create');
    }

    /**
     * Store a newly created rate in storage.
     *
     * @param CreaterateRequest $request
     *
     * @return Response
     */
    public function store(CreaterateRequest $request)
    { 
        $input = $request->all();

        $rate = $this->rateRepository->create($input);

        Flash::success('Rate saved successfully.');

        return redirect(route('rates.index'));
    }

    /**
     * Display the specified rate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('rates.index'));
        }

        return view('rates.show')->with('rate', $rate);
    }

    /**
     * Show the form for editing the specified rate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('rates.index'));
        }

        return view('rates.edit')->with('rate', $rate);
    }

    /**
     * Update the specified rate in storage.
     *
     * @param int $id
     * @param UpdaterateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterateRequest $request)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('rates.index'));
        }

        $rate = $this->rateRepository->update($request->all(), $id);

        Flash::success('Rate updated successfully.');

        return redirect(route('rates.index'));
    }

    /**
     * Remove the specified rate from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rate = $this->rateRepository->find($id);

        if (empty($rate)) {
            Flash::error('Rate not found');

            return redirect(route('rates.index'));
        }

        $this->rateRepository->delete($id);

        Flash::success('Rate deleted successfully.');

        return redirect(route('rates.index'));
    }
}
