<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\PositionTeam;
use App\Models\Team;
use App\Repositories\TeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TeamController extends AppBaseController
{
    /** @var  TeamRepository */
    private $teamRepository;

    public function __construct(TeamRepository $teamRepo)
    {
        $this->teamRepository = $teamRepo;
    }

    /**
     * Display a listing of the Team.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teams = Team::with('positionTeams.positionName')->get();

        return view('teams.index')
            ->with('teams', $teams);
    }

    /**
     * Show the form for creating a new Team.
     *
     * @return Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param CreateTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamRequest $request)
    {
        $input = $request->all();

        $team = $this->teamRepository->create($input);
        $team->uploadFile($request["image"],"image");
        if($request->get("team")){if($team->positionTeams){foreach ($team->positionTeams as $teammate){$teammate->delete();}}foreach ($request->get("team") as $position){PositionTeam::add(["position_id"=>$position,"team_id"=>$team->id]);}}
        Flash::success('Сотрудник успешно сохранен.');

        return redirect(route('teams.index'));
    }

    /**
     * Display the specified Team.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $team = $this->teamRepository->find($id);

        if (empty($team)) {
            Flash::error('Сотрудник не найден');

            return redirect(route('teams.index'));
        }

        return view('teams.show')->with('team', $team);
    }

    /**
     * Show the form for editing the specified Team.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $team = $this->teamRepository->find($id);

        if (empty($team)) {
            Flash::error('Сотрудник не найден');

            return redirect(route('teams.index'));
        }

        return view('teams.edit')->with('team', $team);
    }

    /**
     * Update the specified Team in storage.
     *
     * @param int $id
     * @param UpdateTeamRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'slug' => 'nullable|string|max:255',
            'name_kz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'position_kz' => 'required|string|max:500',
            'position_ru' => 'required|string|max:500',
            'position_en' => 'required|string|max:500',
            'image' => 'sometimes|image|file|max:100000',
            'about' => 'nullable|string',
            'instagram' => 'nullable|string|max:500',
            'facebook' => 'nullable|string|max:500',
            'vk' => 'nullable|string|max:500',
            'linkedin' => 'nullable|string|max:500',
            'twitter' => 'nullable|string|max:500',
            'email' => 'nullable|string|max:500',
            'website' => 'nullable|string|max:500',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $team = $this->teamRepository->find($id);

        if (empty($team)) {
            Flash::error('Сотрудник не найден');

            return redirect(route('teams.index'));
        }

        $team = $this->teamRepository->update($request->all(), $id);
        if ($request['image']){
            $team->uploadFile($request["image"],"image");
        }
        if($request->get("team")){if($team->positionTeams){foreach ($team->positionTeams as $teammate){$teammate->delete();}}foreach ($request->get("team") as $position){PositionTeam::add(["position_id"=>$position,"team_id"=>$team->id]);}}

        Flash::success('Сотрудник успешно обновлен.');

        return redirect(route('teams.index'));
    }

    /**
     * Remove the specified Team from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $team = $this->teamRepository->find($id);

        if (empty($team)) {
            Flash::error('Сотрудник не найден');

            return redirect(route('teams.index'));
        }

        $this->teamRepository->delete($id);

        Flash::success('Сотрудник удален.');

        return redirect(route('teams.index'));
    }
}
