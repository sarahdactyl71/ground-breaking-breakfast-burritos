@extends('master')
@section('content')

<h1>Create a Breakfast Burrito</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'burritos')) }}

    <div class="form-group">
        {{ Form::label('location', 'Location') }}
        {{ Form::text('location') }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{ Form::text('address') }}
    </div>

    <div class="form-group">
        {{ Form::label('originality', 'Originality') }}
        {{ Form::number('originality', 1) }}
    </div>

    <div class="form-group">
        {{ Form::label('price_point', 'Price Point') }}
        {{ Form::text('price_point') }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description') }}
    </div>

    <div class="form-group">
        {{ Form::label('image_path', 'Image') }}
        {{ Form::text('image_path') }}
    </div>

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection
