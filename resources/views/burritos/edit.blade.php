@extends('master')
@section('content')
<div class="container">
  <h1>Edit Burrito</h1>
  <br>
  <form method="post" action="{{action('BurritosController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="location" name="location" value="{{$burrito->location}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="address" name="address" value="{{$burrito->address}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Originality</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="originality" name="originality" value="{{$burrito->originality}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Price Point</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="price_point" name="price_point" value="{{$burrito->price_point}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="description" name="description" value="{{$burrito->description}}">
      </div>
    </div>
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="image_path" name="image_path" value="{{$burrito->image_path}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update Burrito</button>
    </div>
  </form>
</div>
@endsection
