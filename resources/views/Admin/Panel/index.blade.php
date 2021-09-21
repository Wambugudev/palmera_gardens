@extends('layouts.app')

@section('content')


<!-- Background image -->
<div class="">
    <div class="bg-image" style="
      background: url('/media/photos/logo2.png')no-repeat center center /cover;
      height: 70vh;
    ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="card">
                        <div class="card-header text-light bg-primary"><h5>Menu</h5></div>
                            <ul class="list-group mt-2">
                                <a href="{{route('Admin.Panel')}}" class=" list-group-item active">Users</a>
                                <a href="{{route('Alcohol.Item')}}" class=" list-group-item list-group-item-action">Add Item</a>
                                <a href="#" class=" list-group-item list-group-item-action">Bar request</a>
                                <a href="#" class=" list-group-item list-group-item-action">Issued Stock</a>
                                <a href="#" class=" list-group-item list-group-item-action">Expired Items</a>
                                <a href="#" class=" list-group-item list-group-item-action">Removed Items</a>
                                <a href="#" class=" list-group-item list-group-item-action">Stock Report</a>
                                <a href="" class=" list-group-item list-group-item-action"><span style="color: #21a0a0">Kitchen Store</span></a>
                              </ul>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card-header text-light bg-primary">Users</div>
                    <div class="card body mt-4">
                      
    
                      {{-- Table that displays the alcohols in the database--}}
                      <table class="table table-hover ">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Account</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($users as $user)
                          
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->uname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->account}}</td>
                            <td>{{$user->status}}</td>
                            <td>{{$user->created_at}}</td>
                            @if ($user->status == 'activated')
                                <td>
                                    <form action="{{route('Deactivate.Account',$user->id)}}" method="post">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit" class="btn btn-sm btn-danger">Deactivate</button>
                                    </form>
                                </td>
                            @else
                            <td>
                                <form action="{{route('Activate.Account',$user->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-sm btn-success">Activate</button>
                                </form>
                            </td>
                            @endif
                          </tr>
                        @endforeach
                        
                        </tbody>
                      </table>
                      
                      {{--  --}}
                        
                    </div>
                </div>
              </div>
        </div>
</div>

@endsection