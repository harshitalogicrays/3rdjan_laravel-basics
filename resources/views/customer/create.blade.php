@extends('layout.main')
@section('mainsection')
    <div class="container mt-2 shadow p-4">
        <div class="card">
            <div class="card-header">
                <h1>Add Customer 
                    <a href="{{url('/customer')}}" type="button" class="btn btn-primary float-end btn-lg"> View Customers</a>    
                </h1>
            </div>
            <div class="card-body">
                {{-- <form method="post" action="{{url('/customer/add')}}"> --}}
                    <form method="post" action="{{route('add')}}">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="{{old('mobile')}}">
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">DOB</label>
                            <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">Confirm Password</label>
                            {{-- <input type="password" class="form-control" name="password_confirmation"> --}}
                            <input type="password" class="form-control" name="cpassword">
                            @error('cpassword')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gender : </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="m">
                            <label for="" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="f">
                            <label for="" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="o">
                            <label for="" class="form-check-label">Other</label>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <textarea class="form-control" name="address">{{old('address')}}</textarea>
                        </div>
                        <div class="mb-3 ">
                            <label for="" class="form-label">status : &emsp;</label>
                            <input type="checkbox" class="form-check-input" name="status">
                        </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
   <hr/>
@endsection