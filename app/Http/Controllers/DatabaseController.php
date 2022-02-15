<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;


class DatabaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function db()
    {
        $plates = Plate::latest()->paginate(8);

        return view('database', compact('plates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('database');
    }
}
