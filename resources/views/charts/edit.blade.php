@extends('layouts.app')

@section('content')


    <div class="text-center">
        <h1>チャート編集</h1>
    </div>
    <div class="row">
            {!! Form::model($chart, ['route' => ['charts.update', $chart->id], 'method' => 'put']) !!}
                <table border="1">
                    <thead>
                        <tr>
                            <th width="10%">id</th>
                            <td width="50%">sentence</td>
                            <td width="10%">yes_id</td>
                            <td width="10%">no_id</td>
                            <td width="10%">yes_result_id</td>
                            <td width="10%">no_result_id</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th width="10%">id</th>
                            <th width="50%">
                                {!! Form::text('sentence', old('sentence'), ['class' => 'form-control']) !!}
                            </th>
                            <th width="10%">
                                {!! Form::text('yes_id', old('yes_id'), ['class' => 'form-control']) !!}
                            </th>
                            <th width="10%">
                                {!! Form::text('no_id', old('no_id'), ['class' => 'form-control']) !!}
                            </th>
                            <th width="10%">
                                {!! Form::text('yes_result_id', old('yes_result_id'), ['class' => 'form-control']) !!}
                            </th>
                            <th width="10%">
                                {!! Form::text('no_result_id', old('no_result_id'), ['class' => 'form-control']) !!}
                            </th>
                        </tr> 
                    </tbody>
                </table>
                
                <center>
                {!! Form::submit('更新', ['class' => 'btn btn-primary btn-m']) !!}
                </center>
            {!! Form::close() !!}   
    </div>
@endsection