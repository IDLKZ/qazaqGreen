<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePositionTeamRequest;
use App\Http\Requests\UpdatePositionTeamRequest;
use App\Repositories\PositionTeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PositionTeamController extends AppBaseController
{
    /** @var  PositionTeamRepository */
    private $positionTeamRepository;

    public function __construct(PositionTeamRepository $positionTeamRepo)
    {
        $this->positionTeamRepository = $positionTeamRepo;
    }

    /**
     * Display a listing of the PositionTeam.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $positionTeams = $this->positionTeamRepository->all();

        return view('position_teams.index')
            ->with('positionTeams', $positionTeams);
    }

    /**
     * Show the form for creating a new PositionTeam.
     *
     * @return Response
     */
    public function create()
    {
        return view('position_teams.create');
    }

    /**
     * Store a newly created PositionTeam in storage.
     *
     * @param CreatePositionTeamRequest $request
     *
     * @return Response
     */
    public function store(CreatePositionTeamRequest $request)
    {
        $input = $request->all();

        $positionTeam = $this->positionTeamRepository->create($input);

        Flash::success('Position Team saved successfully.');

        return redirect(route('positionTeams.index'));
    }

    /**
     * Display the specified PositionTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $positionTeam = $this->positionTeamRepository->find($id);

        if (empty($positionTeam)) {
            Flash::error('Position Team not found');

            return redirect(route('positionTeams.index'));
        }

        return view('position_teams.show')->with('positionTeam', $positionTeam);
    }

    /**
     * Show the form for editing the specified PositionTeam.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $positionTeam = $this->positionTeamRepository->find($id);

        if (empty($positionTeam)) {
            Flash::error('Position Team not found');

            return redirect(route('positionTeams.index'));
        }

        return view('position_teams.edit')->with('positionTeam', $positionTeam);
    }

    /**
     * Update the specified PositionTeam in storage.
     *
     * @param int $id
     * @param UpdatePositionTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePositionTeamRequest $request)
    {
        $positionTeam = $this->positionTeamRepository->find($id);

        if (empty($positionTeam)) {
            Flash::error('Position Team not found');

            return redirect(route('positionTeams.index'));
        }

        $positionTeam = $this->positionTeamRepository->update($request->all(), $id);

        Flash::success('Position Team updated successfully.');

        return redirect(route('positionTeams.index'));
    }

    /**
     * Remove the specified PositionTeam from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $positionTeam = $this->positionTeamRepository->find($id);

        if (empty($positionTeam)) {
            Flash::error('Position Team not found');

            return redirect(route('positionTeams.index'));
        }

        $this->positionTeamRepository->delete($id);

        Flash::success('Position Team deleted successfully.');

        return redirect(route('positionTeams.index'));
    }
}
