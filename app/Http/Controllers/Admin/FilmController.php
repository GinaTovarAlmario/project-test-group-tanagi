<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = new Film();
        return view('films.create',compact('film'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $data = request()->validated();
        $film = Film::create($data);
        redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view('films.edit',compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $request->validate();

        $formData = $request->all();
        $film = Film::create();

        // $film->title = $formData["title"];
        // $film->date_of_release = $formData["date_of_release"];
        // $film->director = $formData["director"];
        // $film->description = $formData["description"];

        $film->update();

        return redirect()->route('admin.projects.show', $film);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}
