@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>カードデータ登録</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
    {!! Form::model($card, ['route' => 'cards.store']) !!}

        <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('fee', 'annual_fee:') !!}
        {!! Form::text('fee', old('fee'), ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('point_rate', 'point_rate:') !!}
        {!! Form::text('point_rate', old('point_rate'), ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('travel', 'travel_insurance:') !!}
        {!! Form::select('travel',[
                'なし' => 'なし',
                'あり（クレカ払いのみ）' => 'あり（クレカ払いのみ）',
                'あり（クレカ払いに限らず）' => 'あり（クレカ払いに限らず）'], 
                '選択してください', 
                ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('text', 'description_text:') !!}
        {!! Form::textarea('text', old('text'), ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    
        </div>
    </div>
    
    <br>
    <br>
    
    <div class="text-center">
        <h1>カードデータ一覧</h1>
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
                
                <div class="text-center">
                {!! link_to_route('cards.edit', '編集', ['id' => $card->id], ['class' => 'btn btn-primary btn-m']) !!}
                
                {!! Form::model($card, ['route' => ['cards.destroy', $card->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-m']) !!}
                {!! Form::close() !!}
                </div>

            @endforeach
        </ul>
    @endif

@endsection