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

<h1>All the Burritos</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Location</td>
            <td>Address</td>
            <td>Originality out of 5</td>
            <td>Price Point</td>
            <td>Description</td>
            <td>Image</td>
        </tr>
    </thead>
    <tbody>
    @foreach($burritos as $burrito)
        <tr>
            <td>{{ $burrito['id'] }}</td>
            <td>{{ $burrito['location'] }}</td>
            <td>{{ $burrito['address'] }}</td>
            <td>{{ $burrito['originality'] }}</td>
            <td>{{ $burrito['price_point'] }}</td>
            <td>{{ $burrito['description'] }}</td>
            <td>{{ $burrito["image_path"] }}</td>
            <td>
                <a href="{{action('BurritosController@edit', $burrito['id'])}}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{action('BurritosController@destroy', $burrito['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
