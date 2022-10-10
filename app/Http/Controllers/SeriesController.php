<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function index()
    {
        $series = [
            'Game of Thrones',
            'The Office',
            'Rick and Morty',
        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
