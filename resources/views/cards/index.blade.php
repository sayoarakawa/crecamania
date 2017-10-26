@extends('layouts.app')



@section('content')

    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>あなたのライフスタイルに合った<br>オススメのクレジットカードを紹介します。</h1>
                <a href="" class="btn btn-success btn-lg">オススメのクレカ診断</a>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h1>クレジットカード一覧</h1>
    </div>

    @if (count($cards) > 0)
        <ul>
            @foreach ($cards as $card)
                <h2><center>{{ $card->name }}</center></h2>
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
                
                <div class="text-right">
                {!! link_to_route('cards.edit', '編集', ['id' => $card->id], ['class' => 'btn btn-lg btn-primary btn-xs']) !!}
                
                {!! Form::model($card, ['route' => ['cards.destroy', $card->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
                </div>

            @endforeach
        </ul>
    @endif

@endsection