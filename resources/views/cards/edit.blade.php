@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>カードデータ編集</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            
    {!! Form::model($card, ['route' => ['cards.update', $card->id], 'method' => 'put']) !!}

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

        {!! Form::submit('更新', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    
        </div>
    </div>

@endsection