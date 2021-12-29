<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMagazineRequest;
use App\Http\Requests\UpdateMagazineRequest;
use App\Repositories\MagazineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MagazineController extends AppBaseController
{
    /** @var  MagazineRepository */
    private $magazineRepository;

    public function __construct(MagazineRepository $magazineRepo)
    {
        $this->magazineRepository = $magazineRepo;
    }

    /**
     * Display a listing of the Magazine.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $magazines = $this->magazineRepository->all();

        return view('magazines.index')
            ->with('magazines', $magazines);
    }

    /**
     * Show the form for creating a new Magazine.
     *
     * @return Response
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created Magazine in storage.
     *
     * @param CreateMagazineRequest $request
     *
     * @return Response
     */
    public function store(CreateMagazineRequest $request)
    {
        $input = $request->all();

        $magazine = $this->magazineRepository->create($input);
        $magazine->uploadFile($request["image"],"image");
        $magazine->uploadFile($request["file"],"file");
        Flash::success('Журнал успешно сохранен');

        return redirect(route('magazines.index'));
    }

    /**
     * Display the specified Magazine.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $magazine = $this->magazineRepository->find($id);

        if (empty($magazine)) {
            Flash::error('Журнал не найден');

            return redirect(route('magazines.index'));
        }

        return view('magazines.show')->with('magazine', $magazine);
    }

    /**
     * Show the form for editing the specified Magazine.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $magazine = $this->magazineRepository->find($id);

        if (empty($magazine)) {
            Flash::error('Журнал не найден');

            return redirect(route('magazines.index'));
        }

        return view('magazines.edit')->with('magazine', $magazine);
    }

    /**
     * Update the specified Magazine in storage.
     *
     * @param int $id
     * @param UpdateMagazineRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'slug' => 'string|max:255',
            'title_ru' => 'required|string|max:500',
            'title_kz' => 'nullable|string|max:500',
            'title_en' => 'nullable|string|max:500',
            'description_ru' => 'required|string',
            'description_kz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'sometimes|image|max:1000000',
            'file' => 'sometimes|file|max:1000000',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $magazine = $this->magazineRepository->find($id);

        if (empty($magazine)) {
            Flash::error('Журнал не найден');

            return redirect(route('magazines.index'));
        }

        $magazine = $this->magazineRepository->update($request->all(), $id);
        if ($request['image']){
            $magazine->uploadFile($request["image"],"image");
        }
        if ($request['file']){
            $magazine->uploadFile($request["file"],"file");
        }

        Flash::success('Журнал успешно обновлен.');

        return redirect(route('magazines.index'));
    }

    /**
     * Remove the specified Magazine from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $magazine = $this->magazineRepository->find($id);

        if (empty($magazine)) {
            Flash::error('Журнал не найден');

            return redirect(route('magazines.index'));
        }

        $this->magazineRepository->delete($id);

        Flash::success('Журнал удален.');

        return redirect(route('magazines.index'));
    }
}
