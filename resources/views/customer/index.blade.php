@extends('layout.main')
@section('mainsection')
@if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>Customers 
        <a href="{{url('/customer/trash')}}" type="button" class="btn btn-danger float-end btn-lg me-2"> Trash </a>    
        <a href="{{url('/customer/create')}}" type="button" class="btn btn-info float-end btn-lg me-2"> Add </a>    
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
                                                href="{{url('/customer/edit/'.$customer->id)}}"><i class="bi bi-pen"></i></a>
                                                <a class="btn btn-danger"
                                                href="{{url('/customer/delete/'.$customer->id)}}" >
                                                <i class="bi bi-trash"></i></a>
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