<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Repositories\EventRepository;
use App\Http\Controllers\AppBaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Response;

class EventController extends AppBaseController
{
    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
    }

    /**
     * Display a listing of the Event.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $events = Event::orderBy(DB::raw("DATE_FORMAT(date_start,'%d.%M.%Y')"), 'DESC')->paginate(10);

        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {
        $input = $request->all();

        $event = $this->eventRepository->create($input);
        $event->uploadFile($request["image"],"image");
        Flash::success('Событие успешно сохранено.');

        return redirect(route('events.index'));
    }

    /**
     * Display the specified Event.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            Flash::error('Событие не найдено');

            return redirect(route('events.index'));
        }

        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            Flash::error('Событие не найдено');

            return redirect(route('events.index'));
        }

        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified Event in storage.
     *
     * @param int $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'image' => 'sometimes|image',
            'slug' => 'string|max:255',
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'subtitle_ru' => 'required|string|max:255',
            'subtitle_kz' => 'nullable|string|max:255',
            'subtitle_en' => 'nullable|string|max:255',
            'description_ru' => 'required|string',
            'description_kz' => 'nullable|string',
            'description_en' => 'nullable|string',
            'date_start' => 'required|string|max:255',
            'date_end' => 'required|string|max:255',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            Flash::error('Событие не найдено');

            return redirect(route('events.index'));
        }

        $event = $this->eventRepository->update($request->all(), $id);
        if ($request['image']){
            $event->uploadFile($request["image"],"image");
        }

        Flash::success('Событие успешно обновлено.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->eventRepository->find($id);

        if (empty($event)) {
            Flash::error('Событие не найдено');

            return redirect(route('events.index'));
        }

        $this->eventRepository->delete($id);

        Flash::success('Событие успешно удалено.');

        return redirect(route('events.index'));
    }
}
