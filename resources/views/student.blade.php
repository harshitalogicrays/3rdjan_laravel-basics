<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container mt-5">

{{-- <h1>Student Page</h1>
<h2>id = {{$id}} </h2>
<h3>{{$username}}</h3>
<h3>{!! $address !!}</h3> --}}
{{-- {{$sports}} --}}

{{-- @if ($username == "Hiren")
    <p>{{$username}} is available</p>
@endif --}}

{{-- @if ($username == "Hiren")
    <p>{{$username}} is available</p>
@else 
<p>{{$username}} is not available</p>
@endif --}}

{{-- @if ($username == "Hiren")
    <p>{{$username}} is available</p>
@elseif($username=="Harshita")
    <p>username is Harshita</p>
@else
    <p>{{$username}} is not available</p>
@endif --}}


{{-- @for ($i=1;$i<=10;$i++)
    {{$i}}<br>
@endfor --}}


{{-- @foreach ($sports as $s )
    <h5>{{$s}}</h5>
@endforeach --}}
    
{{-- @forelse ( $sports as $s )
    <h5>{{$s}}</h5>
@empty
    <h5>No Array Data Found</h5>
@endforelse --}}

@php
    $i=1;
@endphp
{{-- 
@while ($i<=10)
    <h5>{{$i}}</h5>
    @if ($i==5)
        @break
    @endif
    @php 
    $i++
    @endphp
@endwhile --}}

{{-- @unless ($i>10)
    <h5>{{$i}}</h5>
@endunless --}}

</div>