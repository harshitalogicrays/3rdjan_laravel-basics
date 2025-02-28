@extends('layout.main')
@section('mainsection')
@if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>Deleted Customers 
        <a href="{{url('/customer')}}" type="button" class="btn btn-danger float-end btn-lg me-2"> Back </a>    
    </h1><hr/>
    <div class="table-responsive" >
        <table class="table table-bordered table-striped table-hover">
                <thead>
                        <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th>DOB</th>
                                <th>Gender</th><th>status</th><th>Actions</th>
                        </tr>
                </thead>
                <tbody>
                        @forelse ($customers as  $customer)
                                <tr class="">
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->mobile}}</td>
                                        <td>{{$customer->dob ? 
                                        formatdate('d-M-Y',$customer->dob) : "NA"}}
                                              
                                                </td>
                                        <td>
                                                @if ($customer->gender=="m")
                                                Male    
                                                @elseif ($customer->gender=="f")
                                                Female
                                                @else
                                                   Other     
                                                @endif
                                                </td>
                                        <td>    @if($customer->status=="1")
                                                 <span class="badge rounded-pill text-bg-success">Active</span>   
                                                @else
                                                <span class="badge rounded-pill text-bg-danger">Inactive</span>
                                                @endif
                                        </td>
                                        <td>
                                                <a class="btn btn-success"
                                                href="{{url('/customer/restore/'.$customer->id)}}">Restore</a>
                                                <a class="btn btn-danger" onclick="return confirm('are you sure to delete this??')"
                                                href="{{url('/customer/forcedelete/'.$customer->id)}}" >
                                               Remove</a>
                                        </td>
                                </tr>
                        @empty
                                <tr><td colspan="7">No Customer Found</td></tr>
                        @endforelse
                       
                </tbody>
        </table>
    </div>
    {{$customers->links("pagination::bootstrap-5")}}
@endsection