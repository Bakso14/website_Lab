<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\TypeActivity;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    function index()
    {
        $uniqueRanks = People::select('rank')
            ->distinct()
            ->orderBy('rank', 'asc')
            ->pluck('rank');

        $rankGroups = [];

        // Iterasi melalui daftar rank yang unik dan kelompokkan model untuk setiap rank
        foreach ($uniqueRanks as $rank) {
            $models = People::where('rank', $rank)->get();
            $rankGroups[$rank] = $models;
        }

        return view("pages.people", [
            "title" => "Organization Structure",
            "rankGroups" => $rankGroups,
        ]);
    }

    function detail(String $id)
    {
        $people = People::find($id);
        $championships = $people->activities()->where('type', TypeActivity::Championship->value)->get();
        $researchs = $people->activities()->where('type', TypeActivity::Research->value)->get();
        return view("pages.people-detail", [
            "title" => $people->name,
            "people" => $people,
            "researchs" => $researchs,
            "championships" => $championships
        ]);
    }
}
