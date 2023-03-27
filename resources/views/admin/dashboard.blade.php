@extends('layouts.master')



@section('title')
Dashboard | Food Waste
@endsection



@section('content')

<div class="container">
    <div class="row text-center">
    <div class="card m-2 text-white bg-warning" style="width: 20rem;">
        <div class="card-body text-center">
            <!-- <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <!-- <a href="#" class="card-link">Card link</a>  -->
            <i class="fa fa-gamepad fa-5x "  aria-hidden="true"></i><br>
            <a href="#" class="card-link text-white"><h5>Game</h5></a>
        </div>
    </div>
    <div class="card m-2 text-white bg-primary" style="width: 20rem;">
        <div class="card-body text-center   ">
        <i class="fa fa-user fa-5x center"  aria-hidden="true"></i><br>
            <a href="#" class="card-link text-white"><h5>User</h5></a>
        </div>
    </div>

    <div class="card m-2 text-white bg-secondary" style="width: 20rem;">
        <div class="card-body text-center">
        <i class="fa fa-globe fa-5x center"  aria-hidden="true"></i><br>
            <a href="#" class="card-link text-white"><h5>Blog</h5></a>
        </div>
    </div>

   
    </div>
    

</div>







@endsection



@section('scripts')

@endsection