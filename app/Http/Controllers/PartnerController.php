<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Repositories\PartnerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PartnerController extends AppBaseController
{
    /** @var  PartnerRepository */
    private $partnerRepository;

    public function __construct(PartnerRepository $partnerRepo)
    {
        $this->partnerRepository = $partnerRepo;
    }

    /**
     * Display a listing of the Partner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $partners = $this->partnerRepository->all();

        return view('partners.index')
            ->with('partners', $partners);
    }

    /**
     * Show the form for creating a new Partner.
     *
     * @return Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created Partner in storage.
     *
     * @param CreatePartnerRequest $request
     *
     * @return Response
     */
    public function store(CreatePartnerRequest $request)
    {
        $input = $request->all();

        $partner = $this->partnerRepository->create($input);
        $partner->uploadFile($request["image"],"image");
        Flash::success('Успешно сохранено.');

        return redirect(route('partners.index'));
    }

    /**
     * Display the specified Partner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Партнеры не найдены');

            return redirect(route('partners.index'));
        }

        return view('partners.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified Partner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Партнеры не найдены');

            return redirect(route('partners.index'));
        }

        return view('partners.edit')->with('partner', $partner);
    }

    /**
     * Update the specified Partner in storage.
     *
     * @param int $id
     * @param UpdatePartnerRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title_ru' => 'required|string|max:500',
            'title_kz' => 'nullable|string|max:500',
            'title_en' => 'nullable|string|max:500',
            'image' => 'sometimes|file|image|max:100000',
            'url' => 'nullable|string|url|max:255',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Партнеры не найдены');

            return redirect(route('partners.index'));
        }

        $partner = $this->partnerRepository->update($request->all(), $id);
        if ($request['image']){
            $partner->uploadFile($request["image"],"image");
        }
        Flash::success('Партнер успешно обновлена.');

        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified Partner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $partner = $this->partnerRepository->find($id);

        if (empty($partner)) {
            Flash::error('Партнеры не найдены');

            return redirect(route('partners.index'));
        }

        $this->partnerRepository->delete($id);

        Flash::success('Успешно удалено.');

        return redirect(route('partners.index'));
    }
}
