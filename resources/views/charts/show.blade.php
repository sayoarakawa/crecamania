@extends('layouts.app')

@section('content')

    <h1>該当するチャート</h1>
    
    <p>
        <div class="text-center">
            <h2>{{ $chart->sentence }}</center></h2>
        </div>
                <table border="1">
                    <tbody>
                        <tr>
                            <th>yes_id</th>
                            <td>{{ $chart->yes_id }}</td>
                        </tr>
                        <tr>
                            <th>no_id</th>
                            <td>{{ $chart->no_id }}</td>
                        </tr>
                        <tr>
                            <th>yes_result_id</th>
                            <td>{{ $chart->yes_result_id }}</td>
                        </tr>                        
                        <tr>
                            <th>no_result_id</th>
                            <td>{{ $chart->no_result_id }}</td>
                        </tr>
                    </tbody>
                </table>
    </p>

@endsection