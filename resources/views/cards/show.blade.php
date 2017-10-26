@extends('layouts.app')

@section('content')

    <h1>該当するクレジットカード</h1>
    
    <p>
        <div class="text-center">
            <h2>{{ $card->name }}</center></h2>
        </div>
                <table border="1">
                    <tbody>
                        <tr>
                            <th>年会費</th>
                            <td>{{ $card->fee }}円／年</td>
                        </tr>
                        <tr>
                            <th>ポイント還元率</th>
                            <td>{{ $card->point_rate }}%</td>
                        </tr>
                        <tr>
                            <th>旅行損害補償</th>
                            <td>{{ $card->travel }}</td>
                        </tr>
                    </tbody>
                </table>
                <p><center>{{ $card->text }}</center></p>
    </p>

@endsection