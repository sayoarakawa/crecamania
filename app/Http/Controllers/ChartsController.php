<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Chart;    // 追加
use App\Card;    // 追加

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charts = Chart::all();

        return view('charts.index', [
            'charts' => $charts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chart = new Chart;
        $charts = Chart::all();

        return view('charts.create', [
            'chart' => $chart,
            'charts' => $charts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chart = new Chart;
        $chart->sentence = $request->sentence;
        $chart->yes_id = $request->yes_id;
        $chart->no_id = $request->no_id;
        $chart->yes_result_id = $request->yes_result_id;
        $chart->no_result_id = $request->no_result_id;
        $chart->save();

        return redirect('charts/create/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chart = Chart::find($id);

        return view('charts.show', [
            'chart' => $chart,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chart = Chart::find($id);

        return view('charts.edit', [
            'chart' => $chart,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chart = Chart::find($id);
        $chart->sentence = $request->sentence;
        $chart->yes_id = $request->yes_id;
        $chart->no_id = $request->no_id;
        $chart->yes_result_id = $request->yes_result_id;
        $chart->no_result_id = $request->no_result_id;
        $chart->save();

        return redirect('charts/create/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chart = Chart::find($id);
        $chart->delete();

        return redirect('charts/create/');
    }
    
    public function chart($id)
    {
        $chart = Chart::find($id);
        
        return view('charts.chart', [
            'chart' => $chart,
        ]);
    }
    
    public function result($id)
    {
        $card = Card::find($id);

        return view('charts.result', [
            'card' => $card,
        ]);
    }
}
