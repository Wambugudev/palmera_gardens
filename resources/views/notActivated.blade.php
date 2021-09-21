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
                <div class="card fs-4 " style="margin-top: 100px; opacity:95%;">
                    <div class="card-header text-center ">Activation</div>
    
                    <div class="card-body ">
    
                        Your account is not activated.
                        <br>
                        Please talk to the Admin.
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

@endsection
