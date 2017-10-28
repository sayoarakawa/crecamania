@extends('layouts.app')

@section('content')

    <!--<div class="cover">-->
    <!--    <div class="cover-inner">-->
    <!--        <div class="cover-contents">-->
    <!--            <h1>あなたのライフスタイルに合った<br>オススメのクレジットカードを紹介します。</h1>-->
    <!--            <a href="" class="btn btn-success btn-lg">オススメのクレカ診断</a>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-center">
                    <h3 class="panel-title">ご希望の条件をチェックしてください。</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    {!! Form::model($cards, ['route' => 'cards.search', 'method' => 'get']) !!}
        
                        <div class="form-group">
                        {!! Form::checkbox('fee', 1, false, ['class' => 'field']) !!}年会費無料 <!--feeがname="fee"ということ-->
                        </div>
                        
                        <div class="form-group">
                        {!! Form::checkbox('point_rate', 1, false, ['class' => 'field']) !!}ポイント還元率　1%以上
                        </div>
                        
                        <div class="form-group">
                        {!! Form::checkbox('travel', 1, false, ['class' => 'field']) !!}旅行損害補償あり（クレカ不払いに限らず）
                        </div>
                </div>
            </div>
        </div>

                <div class="col-md-offset-3 col-md-6">
                        {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
        
                    {!! Form::close() !!}
                </div>
            </div>
    
            <br>


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

            @endforeach
        </ul>
    @endif

@endsection