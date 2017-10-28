@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>チャート登録</h1>
    </div>

    <div class="row">
            {!! Form::model($chart, ['route' => 'charts.store']) !!}
                <table border="1">
                    <tbody
                        <tr>
                            <td width="10%">id</td>
                            <td width="50%">sentence</td>
                            <td width="10%">yes_id</td>
                            <td width="10%">no_id</td>
                            <td width="10%">yes_result_id</td>
                            <td width="10%">no_result_id</td>
                        </tr>
                        <tr>
                            <th width="10%"></th>
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
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-m']) !!}
                </center>
            {!! Form::close() !!}    
            
            <div class="text-center">
                <h1>チャート一覧</h1>   
            </div>
                <table>
                    <thead>
                        <tr>
                            <td width="10%">id</td>
                            <td width="50%">sentence</td>
                            <td width="10%">yes_id</td>
                            <td width="10%">no_id</td>
                            <td width="10%">yes_result_id</td>
                            <td width="10%">no_result_id</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
            @if (count($charts) > 0)
                @foreach ($charts as $chart)
                    <tbody>
                        <tr>
                            <td width="10%">{{ $chart->id }}</td>
                            <td width="50%">{{ $chart->sentence }}</td>
                            <td width="10%">{{ $chart->yes_id }}</td>
                            <td width="10%">{{ $chart->no_id }}</td>
                            <td width="10%">{{ $chart->yes_result_id }}</td>
                            <td width="10%">{{ $chart->no_result_id }}</td>
                            <td>{!! link_to_route('charts.edit', '編集', ['id' => $chart->id], ['class' => 'btn btn-lg btn-primary btn-xs']) !!}</td>
                            <td>
                                {!! Form::model($chart, ['route' => ['charts.destroy', $chart->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            @endif
            </table>  
                    </tbody>
                </table>

    </div>

@endsection