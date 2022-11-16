<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }

    public function update(Request $request, Season $season)
    {
        $watchedEpisode = $request->episodes;
        $season->episodes->each(function (Episode $episode) use ($watchedEpisode) {
            $episode->watched = in_array($episode->id, $watchedEpisode);
        });

        $season->push();

        // return redirect()->route('episodes.index');
        return to_route('episodes.index', $season->id);
    }
}
