<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutUs;
use App\Models\CategoryDocument;
use App\Models\CategoryDocumentRel;
use App\Models\Document;
use App\Models\Event;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Partner;
use App\Models\PositionTeam;
use App\Models\Slider;
use App\Models\Task;
use App\Models\Team;

class FrontController extends Controller
{
    public function index()
    {
        $sliders = News::latest()->take(3)->get();
        $tasks = Task::all();
        $partners = Partner::all();
        $teams = PositionTeam::with('team')->where('position_id', 1)->get();
        $journals = Magazine::all();
        return view('welcome', compact('sliders', 'tasks', 'partners', 'teams', 'journals'));
    }

    public function aboutAssociation()
    {
        $info = About::orderBy('created_at', 'desc')->first();
        $documents = CategoryDocumentRel::with('document')->where('category_id', 1)->get();
        $teams = PositionTeam::with('team')->where('position_id', 2)->get();
        $teams2 = PositionTeam::with('team')->where('position_id', 3)->get();
        return view('about-association', compact('info', 'documents', 'teams', 'teams2'));
    }

    public function vie()
    {
        $sliders = Slider::all();
        return view('vie', compact('sliders'));
    }

    public function law()
    {
        $documents = CategoryDocumentRel::with('document')->where('category_id', 2)->paginate(8);
        return view('law', compact('documents'));
    }

    public function material()
    {
        $documents = CategoryDocumentRel::with('document')->where('category_id', 3)->paginate(8);
        return view('material', compact('documents'));
    }

    public function news()
    {
        $news = News::paginate(8);
        return view('news', compact('news'));
    }

    public function singleNew($slug)
    {
        $new = News::where('slug', $slug)->first();
        return view('single-new', compact('new'));
    }

    public function singleEvent($slug)
    {
        $new = Event::where('slug', $slug)->first();
        return view('single-event', compact('new'));
    }

    public function smi()
    {
        $news = AboutUs::paginate(8);
        return view('smi', compact('news'));
    }

    public function event()
    {
        $news = Event::paginate(8);
        return view('event', compact('news'));
    }
}
