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
        <li><a href="{{ URL::to('burritos/create') }}">Create a Burritos</a>
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
            <td>Originality</td>
            <td>Price Point</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
    @foreach($burritos as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->location }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->originality }}</td>
            <td>{{ $value->price_point }}</td>
            <td>{{ $value->description }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the burrito (uses the destroy method DESTROY /burritos/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the burrito (uses the show method found at GET /burritos/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('burritos/' . $value->id) }}">Show this Burrito</a>

                <!-- edit this burrito (uses the edit method found at GET /burritos/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('burritos/' . $value->id . '/edit') }}">Edit this Burrito</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
