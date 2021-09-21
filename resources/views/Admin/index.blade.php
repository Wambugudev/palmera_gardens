@extends('layouts.app')

@section('content')


<!-- Background image -->
<div class="container ">
    <div class="bg-image" style="
      background: url('/media/photos/logo2.png')no-repeat center center /cover;
      height: 70vh;
    ">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card fs-4 " style="margin-top: 100px; opacity:90%;">
                    <div class="card-header text-center text-light bg-primary "><h5>Palmera Stores(Admin View)</h5></div>
    
                    <div class="card-body " style="opacity: 500%">
                        <div class="row">
                            <a class="text-center text-dark badge badge-light" href="http://">
                                <div class="col mt-2 pt-4">
                                    <img src="/media/svg/bar.svg" alt="Bootstrap" width="150px" height="150px" style="color: red" >
                                    <br>
                                    <h4 class="pt-4">Palmera Bar</h4></a>
                                </div>
                            <div class="col">
                                <a class="text-center text-dark badge badge-light" href="http://">
                                    <div class="col mt-2 pt-4">
                                        <img src="/media/svg/kitchen.svg" alt="Bootstrap" width="150px" height="150px" style="color: red" >
                                        <br>
                                        <h4 class="pt-4">Palmera Kitchen</h4></a>
                                    </div>
                            </div>
                            <div class="col">
                                <a class="text-center text-dark badge badge-light" href="{{route('Admin.Panel')}}">
                                    <div class="col mt-2 pt-4">
                                        <img src="/media/svg/user.svg" alt="Bootstrap" width="150px" height="150px" style="color: red" >
                                        <br>
                                        <h4 class="pt-4">Admin Panel</h4></a>
                                    </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

@endsection