<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController
{
    public function index()
    {
        $series = Series::all();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());

        for ($i = 1; $i < $request->seasonQty; $i++) {
            $season = $serie->seasons()->create([
                'number' => $i,
            ]);

            for ($j = 1; $j < $request->episodeQty; $j++) { 
                $season->episodes()->create([
                    'number' => $j,
                ]);  
            } 
        }

        return redirect()->route('series.index');
    }

    public function destroy(Series $series)
    {
       $series->delete();
       return redirect()->route('series.index');
    }

    public function edit(Series $series)
    {
        dd($series->temporadas);
        return view('series.edit')->with('series', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return redirect()->route('series.index');
    }
}
