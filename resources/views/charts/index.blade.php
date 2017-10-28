@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>チャート一覧</h1>
    </div>

    @if (count($charts) > 0)
                <table>
                    <thead>
                        <tr>
                            <th width="10%">id</th>
                            <td width="50%">sentence</td>
                            <td width="10%">yes_id</td>
                            <td width="10%">no_id</td>
                            <td width="10%">yes_result_id</td>
                            <td width="10%">no_result_id</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
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
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>  
                    </tbody>
                </table>
    @endif

@endsection