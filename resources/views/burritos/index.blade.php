@extends('master')
@section('content')

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
                <a href="{{action('BurritosController@show', $burrito['id'])}}" class="btn btn-primary">See Burrito</a>
            </td>
            <td>
                <a href="{{action('BurritosController@edit', $burrito['id'])}}" class="btn btn-warning">Edit Burrito</a>
            </td>
            <td>
                <form action="{{action('BurritosController@destroy', $burrito['id'])}}" method="post">
                  {{csrf_field()}}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit">Delete Burrito</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
