<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Repositories\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NewsController extends AppBaseController
{
    /** @var  NewsRepository */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
    }

    /**
     * Display a listing of the News.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $news = $this->newsRepository->all();

        return view('news.index')
            ->with('news', $news);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        $input = $request->all();

        $news = $this->newsRepository->create($input);
        $news->uploadFile($request["image"],"image");
        $news->uploadFile($request["thumbnail"],"thumbnail");
        Flash::success('Новости успешно сохранены.');

        return redirect(route('news.index'));
    }

    /**
     * Display the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('Новость не найдена');

            return redirect(route('news.index'));
        }

        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('Новость не найдена');

            return redirect(route('news.index'));
        }

        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified News in storage.
     *
     * @param int $id
     * @param UpdateNewsRequest $request
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
            'subtitle_ru' => 'required|string|max:500',
            'subtitle_kz' => 'nullable|string|max:500',
            'subtitle_en' => 'nullable|string|max:500',
            'thumbnail' => 'sometimes|file|image|max:100000',
            'image' => 'sometimes|file|image|max:100000',
            'authors' => 'nullable|string|max:500',
            'description_ru' => 'required|string',
            'description_kz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('Новость не найдена');

            return redirect(route('news.index'));
        }

        $news = $this->newsRepository->update($request->all(), $id);
        if ($request['image']){
            $news->uploadFile($request["image"],"image");
        }
        if ($request['thumbnail']){
            $news->uploadFile($request["thumbnail"],"thumbnail");
        }

        Flash::success('Новость успешно обновлена');

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified News from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->find($id);

        if (empty($news)) {
            Flash::error('Новость не найдена');

            return redirect(route('news.index'));
        }

        $this->newsRepository->delete($id);

        Flash::success('Новость успешно обновлена');

        return redirect(route('news.index'));
    }
}
