<?php

namespace App\Http\Controllers;

use App\Models\Remote;
use Illuminate\Http\Request;

class RemoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('remote.index');
    }

    public function create()
    {
        return view('remote.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Remote $remote)
    {
        //
    }


    public function edit(Remote $remote)
    {
        //
    }


    public function update(Request $request, Remote $remote)
    {
        //
    }


    public function destroy(Remote $remote)
    {
        //
    }
}
