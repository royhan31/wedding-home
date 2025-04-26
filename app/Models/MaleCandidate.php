<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaleCandidate extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "male_candidates";
}
