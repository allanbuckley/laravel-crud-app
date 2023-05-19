@extends('contacts.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Fisrt Name : {{ $contacts->first_name }}</h5>
        <h5 class="card-title">Second Name : {{ $contacts->second_name }}</h5>
        <p class="card-text">Address : {{ $contacts->address }}</p>
        <p class="card-text">Country : {{ $contacts->country }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>