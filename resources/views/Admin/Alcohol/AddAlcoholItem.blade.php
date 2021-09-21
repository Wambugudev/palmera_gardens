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
                        <div class="card-header text-light bg-primary"><h5></h5></div>
                            <ul class="list-group mt-2">
                                <a href="{{route('Admin.Panel')}}" class="list-group-item list-group-item-action">Users</a>
                                <a href="{{route('Alcohol.Item')}}" class=" list-group-item active">Add Item</a>
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
                    <div class="card-header text-light bg-primary"><h4>Add New Alcohol Item</h4></div>
                    <div class="card container body mt-4">
                      
                        <form class="mb-4" action="{{route('AddAlcoholItem.store')}}" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="name">Name</label> 
                                <input type="text" id= "name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <select class="form-control" name="quantity" id="quantity">
                                  <option>250ml</option>
                                  <option>350ml</option>
                                  <option>300ml</option>
                                  <option>750ml</option>
                                  <option>1liter</option>
                                  <option>5liter</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control"  name="type" id="type">
                                  <option>Beer</option>
                                  <option>Vodka</option>
                                  <option>Gin</option>
                                  <option>Soft Drinks</option>
                                  <option>Rum</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="Package">Package</label>
                                <select class="form-control" name="package" id="Package">
                                  <option>Can</option>
                                  <option>Bottle</option>
                                </select>
                              </div>
                            <button type="submit" class="btn-success btn ">Add</button>
                        </form>
                        <div class="card body mt-4">
                            {{-- Table that displays the alcohols in the database--}}
                          <table class="table table-hover ">
                            <thead class="">
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Type</th>
                                <th scope="col">Package</th>
                                <th colspan="2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              @foreach ($items as $item)
                              
                              <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->package}}</td>
                                <td><button class="btn btn-primary btn-sm" type="submit"> Edit</button></td>
                                <td><button class="btn btn-danger btn-sm" type="submit"> Delete</button></td>
                              </tr>
                            @endforeach
                            
                            </tbody>
                          </table>   
                        </div>
                    </div>
                </div>
              </div>
        </div>
</div>

@endsection