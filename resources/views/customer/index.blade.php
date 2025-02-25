@extends('layout.main')
@section('mainsection')
@if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>Customers</h1><hr/>
@endsection