<!-- app/views/burritos/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>All Burritos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('burritos') }}">Burritos</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('burritos') }}">View All Burritos</a></li>
        <li><a href="{{ URL::to('burritos/create') }}">Create a Burrito</a>
    </ul>
</nav>

<h1>Create a Burrito</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'burritos')) }}

    <div class="form-group">
        {{ Form::label('location', 'Location') }}
        {{ Form::text('location', Input::old('location'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Email') }}
        {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('burrito_level', 'Nerd Level') }}
        {{ Form::select('burrito_level', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
