<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;

class AudienceController extends Controller
{
    public function store(Request $request){

        Audience::create([
            "name" => $request->name,
            "description" => $request->description,
            "status" => $request->status
        ]);

        return response()->json([
            "message" => "success"
        ]);
    }
}
