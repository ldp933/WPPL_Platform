@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
<<<<<<< HEAD
    <h1 class="h3 mb-4 text-gray-800">{{ __('List Assignment') }}</h1>
=======

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Assignment</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('List Assignment') }}</h1>

    <!-- Main Content goes here -->

    <h1 class="h3 mb-4 text-gray-800">{{ __('Assignments') }}</h1>
>>>>>>> master

    <!-- Main Content goes here -->
    <div class="container-0 card-header">  
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Task 3</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-danger">Unfinished</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload</a>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div> 
    </div>



    <!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush
