@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$contacts->first_name}}" class="form-control"></br>
        <label>Second Name</label></br>
        <input type="text" name="second_name" id="second_name" value="{{$contacts->second_name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$contacts->country}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop