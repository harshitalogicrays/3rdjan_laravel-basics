@extends('layout.main')
@section('mainsection')
@php
    $id=1;
@endphp
    <h1 class="text-danger">Home Page</h1>
    <x-alert message="success alert" type="success" class="text-center" :id="$id">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ducimus odio deleniti illo dolor, cum placeat saepe at tenetur nobis distinctio doloremque consequuntur tempora reiciendis quaerat? Maxime perspiciatis eaque eos!</h3>
       <x-slot:paragraph> <p>para</p> </x-slot:paragraph>
    </x-alert>

    <x-alert message="alert message" type="danger" dismissible={{true}}></x-alert>

    <x-inlinecomp title="this is an inline comp demo"></x-inlinecomp>

@endsection