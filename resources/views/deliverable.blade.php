@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Deliverable') }}</h1>

    <!-- Main Content goes here -->
    <div class="container-0 card-header">  
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
            </div>
        </div> 
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
            </div>
        </div>
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
            </div>
        </div>
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
            </div>
        </div>
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
            </div>
        </div>
        <div class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <img src="img/task_icon.png" alt="..." class="float-left mr-2" style="margin-left:20px">
                </div>
                <div class="item-1">
                    <h5 class="card-title">Lean Canvas</h5>
                    <p class="card-text">30 days left</p>
                    <a href="#" class="btn btn-blue">UI/UX</a>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Upload File</a>
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
