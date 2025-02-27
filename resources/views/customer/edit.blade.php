@extends('layout.main')
@section('mainsection')
    <div class="container mt-2 shadow p-4">
        <div class="card">
            <div class="card-header">
                <h1>Edit Customer 
                    <a href="{{url('/customer')}}" type="button" class="btn btn-primary float-end btn-lg"> View Customers</a>    
                </h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('/customer/update/'.$customer->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$customer->name}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$customer->email}}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="{{$customer->mobile}}">
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">DOB</label>
                            <input type="date" class="form-control" name="dob" value="{{$customer->dob}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password"
                            value={{$customer->password}}>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="mb-3 col">
                            <label for="" class="form-label">Confirm Password</label>
                            {{-- <input type="password" class="form-control" name="password_confirmation"> --}}
                            <input type="password" class="form-control" name="cpassword"
                            value="{{$customer->password}}">
                            @error('cpassword')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Gender : </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="m"
                            {{$customer->gender=='m' ? "checked":""}}>
                            <label for="" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="f"
                            {{$customer->gender=='f' ? "checked":""}}>
                            <label for="" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" value="o"
                            {{$customer->gender=='o' ? "checked":""}}>
                            <label for="" class="form-check-label">Other</label>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <textarea class="form-control" name="address">{{$customer->address}}</textarea>
                        </div>
                        <div class="mb-3 ">
                            <label for="" class="form-label">status : &emsp;</label>
                            <input type="checkbox" class="form-check-input" name="status"
                            {{$customer->status=="1" ? "checked":""}}>
                        </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary"> Update </button>
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
   <hr/>
@endsection