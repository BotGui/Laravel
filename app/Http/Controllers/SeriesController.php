<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
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
        $serie   = Series::create($request->all());
        $seasons = [];
        for ($i = 1; $i <= $request->seasonQty; $i++) {
            $seasons[] =[
                'series_id' => $serie->id,
                'number'    => $i,
            ];
        }
        Season::insert($seasons);

        $episodes = [];
        foreach ($serie->seasons as $season) {
            for ($j = 1; $j <= $request->episodeQty; $j++) { 
                $episodes[] = [
                    'season_id' => $season->id,
                    'number'    => $j,
                ];  
            } 
        }
        Episode::insert($episodes);

        return redirect()->route('series.index');
    }

    public function destroy(Series $series)
    {
       $series->delete();
       return redirect()->route('series.index');
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Series $series, SeriesFormRequest $request, Season $seasons, Episode $episodes)
    {
        $series->fill($request->all());
        $series->save();

        return redirect()->route('series.index');
    }
}
