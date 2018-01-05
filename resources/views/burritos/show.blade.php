@extends('master')
@section('content')
<div class="container">
  <h1>That's a Mighty Fine Breakfast Burrito!</h1>
  <br>
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
        <tr>
            <td>{{ $burrito['id'] }}</td>
            <td>{{ $burrito['location'] }}</td>
            <td>{{ $burrito['address'] }}</td>
            <td>{{ $burrito['originality'] }}</td>
            <td>{{ $burrito['price_point'] }}</td>
            <td>{{ $burrito['description'] }}</td>
            <td>{{ $burrito["image_path"] }}</td>
        </tr>
    </tbody>
  </table>
</div>
@endsection
