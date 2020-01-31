<?php

namespace App\Http\Controllers;

use App\Donate;
use Illuminate\Http\Request;
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
    public function index(Request $request)
    {
        if ($request->get('wilaya') != null) {
            # code...
        }
        $options = [
            'chart_title' => 'Donneur Par wilaya',
            'report_type' => 'group_by_string',
            'model' => Donate::class,
            'group_by_field' => 'wilaya',
            'chart_type' => 'bar',  
        ];
        $chart = new LaravelChart($options);
        $options = [
            'chart_title' => 'Donneur Par groupage',
            'report_type' => 'group_by_string',
            'model' => Donate::class,
            'group_by_field' => 'groupage',
            'chart_type' => 'bar',  
        ];
        $chart1 = new LaravelChart($options);
        $chart_options = [
            'chart_title' => 'Donneur par existance',
            'report_type' => 'group_by_string',
            'model' => Donate::class,
            'group_by_field' => 'existance',
            'chart_type' => 'pie',
        ];

        $chart2 = new LaravelChart($chart_options);
        $donates = Donate::all()->count();
        return view('pages.home')->with('donates',$donates)->with('chart',$chart)->with('chart1',$chart1)->with('chart2',$chart2);
    }
}
