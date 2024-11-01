<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // jobs for this tag

        return view('results', ['jobs' => $tag->jobs]);
    }
    // public function __invoke(Tag $tag)
    // {
    //     // Fetch jobs associated with this tag
    //     $jobs = $tag->jobs; // Ensure the jobs relationship is defined in the Tag model

    //     return view('results', ['jobs' => $jobs]);
    // }
}
