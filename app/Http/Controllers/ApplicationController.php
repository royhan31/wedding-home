<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\MaleCandidate;
use App\Models\FemaleCandidate;
use Carbon\Carbon;

class ApplicationController extends Controller
{
    public function index() {
        $data = Application::first();
        $weddingDate = Carbon::parse($data->wedding_date)->isoFormat('dddd, D MMMM Y');
        $male = MaleCandidate::first();
        $female = FemaleCandidate::first();

        $data->wedding_date = $weddingDate;
        return view("welcome", [
            "data" => $data,
            "male" => $male,
            "female" => $female
        ]);
    }

    public function home() {
        $data = Application::first();
        $weddingDate = Carbon::parse($data->wedding_date);
        $male = MaleCandidate::first();
        $female = FemaleCandidate::first();

        $data->wedding_date = $weddingDate;
        return view("home.index", [
            "data" => $data,
            "male" => $male,
            "female" => $female
        ]);
    }
}
