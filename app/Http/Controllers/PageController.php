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
        $page->content = str_replace('[map]', view('components.map')->render(), $page->content);
        return view('page', compact('page'));
    }
}
