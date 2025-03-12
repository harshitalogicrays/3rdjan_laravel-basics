@extends('layout.main')
@section('mainsection')
    <div class="container mt-5 col-6">
        <h1>File Upload Demo</h1>
        {{-- <form action="{{url('/fileupload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Choose file</label>
                <input type="file"  class="form-control"  name="image"/>
            </div>
            <button type="submit"  class="btn btn-primary"> Submit</button>  
        </form> --}}


        <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Choose file</label>
                <input type="file"  class="form-control"  name="image"/>
            </div>
            <button type="submit"  class="btn btn-primary"> Submit</button>  
        </form>


        @error('image')
            <span class="text-danger">{{$message}}</span>
        @enderror

        @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
@endsection