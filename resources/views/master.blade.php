<!DOCTYPE html>
<html>
<head>
    <title>All Burritos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('burritos') }}">Burritos</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('burritos') }}">View All Burritos</a></li>
        <li><a href="{{ URL::to('burritos/create') }}">Create a Burrito</a>
    </ul>
</nav>

<div class="container">
  @yield('content')
</div>

</body>
</html>
