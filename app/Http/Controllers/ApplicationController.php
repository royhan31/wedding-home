<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\MaleCandidate;
use App\Models\FemaleCandidate;
use App\Models\Schedule;
use App\Models\Story;
use App\Models\Audience;
use Carbon\Carbon;

class ApplicationController extends Controller
{
    public function index() {
        $data = Application::first();
        if($data){
            $weddingDate = Carbon::parse($data->wedding_date);
            $data->wedding_date = $weddingDate;
        }
        $male = MaleCandidate::first();
        $female = FemaleCandidate::first();

        
        return view("welcome", [
            "data" => $data,
            "male" => $male,
            "female" => $female
        ]);
    }

    public function home() {
        $data = Application::first();
        if($data){
            $weddingDate = Carbon::parse($data->wedding_date);
            $data->wedding_date = $weddingDate;
        }
        $male = MaleCandidate::first();
        $female = FemaleCandidate::first();
        $schedule = Schedule::orderBy("position", "ASC")->get();
        $stories = Story::orderBy("position", "ASC")->get();
        $audiences = Audience::orderBy("created_at", "DESC")->paginate(15);

        return view("home.index", [
            "data" => $data,
            "male" => $male,
            "female" => $female,
            "schedule" => $schedule,
            "stories" => $stories,
            "audiences" => $audiences,
        ]);
    }
}
