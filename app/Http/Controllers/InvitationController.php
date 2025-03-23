<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

class InvitationController extends Controller
{
    public function index() {
        $invitation = Invitation::first();
        return view("welcome", [
            "data" => $invitation
        ]);
    }
}
