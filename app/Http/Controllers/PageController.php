<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use Tobiasla78\FilamentSimplePages\Models\SimplePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(SimplePage $page)
    {
        return view('page', compact('page'));
    }
}
