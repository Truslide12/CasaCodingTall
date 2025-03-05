<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // add search/filter function based on the selected main nav section
        return view('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function group()
    {
        // add filter function to get data based on button pressed
        $projects = Site::all()->get;
        return view('index')->with('projects', $projects);
    }

    // Direct routes
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function mhs()
    {
        return view('mhs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }
}
