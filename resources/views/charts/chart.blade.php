@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>{{ $chart->sentence }}</h1>
    </div>

    {!! Form::open(['method' => 'get']) !!}
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                @if ($chart->yes_id == 0)
                    <center>{!! link_to_route('charts.result', 'はい',  ['id' => $chart->yes_result_id], array('class' => 'btn btn-primary')) !!}</center>
                @else
                    <center>{!! link_to_route('charts.chart', 'はい',  ['id' => $chart->yes_id], array('class' => 'btn btn-primary')) !!}</center>
                @endif
            </div>
            <div class="col-md-3">
                @if ($chart->no_id == 0)
                    <center>{!! link_to_route('charts.result', 'いいえ',  ['id' => $chart->no_result_id], array('class' => 'btn btn-primary')) !!}</center>
                @else
                    <center>{!! link_to_route('charts.chart', 'いいえ',  ['id' => $chart->no_id], array('class' => 'btn btn-primary')) !!}</center>
                @endif
            </div>
            <div class="col-md-3"></div>
        </div>
    {!! Form::close() !!}    
@endsection