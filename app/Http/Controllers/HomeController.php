<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;
use Carbon\Carbon;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
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
    public function index()
    {
        $data=Plate::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $months=[];
        $monthCount=[];

        foreach($data as $month =>$values){
            $months[] = $month;
            $monthCount[] = count($values);
        }
        
        
        $plates = Plate::orderby('id','DESC')->paginate(5);

        return view('home', compact('plates','data','months','monthCount'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

            
    }
}
