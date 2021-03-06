<?php

namespace App\Http\Controllers;

use App\FileUpload;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Repositories\SliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SliderController extends AppBaseController
{
    /** @var  SliderRepository */
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the Slider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sliders = $this->sliderRepository->all();

        return view('sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Slider.
     *
     * @return Response
     */
    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param CreateSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateSliderRequest $request)
    {
        $input = $request->all();
        $slider = $this->sliderRepository->create($input);
        $slider->uploadFile($request["image"],"image");
        Flash::success('Слайдер успешно создан.');

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified Slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Слайдер не найден');

            return redirect(route('sliders.index'));
        }

        return view('sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Слайдер не найден');

            return redirect(route('sliders.index'));
        }

        return view('sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param int $id
     * @param UpdateSliderRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'image' => 'sometimes|file|image|max:100000',
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_ru' => 'required|string',
            'description_kz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'order' => 'required|integer',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Слайдер не найден');

            return redirect(route('sliders.index'));
        }

        $slider = $this->sliderRepository->update($request->all(), $id);
        if ($request['image']){
            $slider->uploadFile($request["image"],"image");
        }

        Flash::success('Слайдер успешно обновлен.');

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slider = $this->sliderRepository->find($id);

        if (empty($slider)) {
            Flash::error('Слайдер не найден');

            return redirect(route('sliders.index'));
        }

        $this->sliderRepository->delete($id);

        Flash::success('Слайдер удален.');

        return redirect(route('sliders.index'));
    }
}
