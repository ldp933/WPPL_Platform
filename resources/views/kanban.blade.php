@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Kanban Card') }}</h1>

    <!-- Main Content goes here -->
    <div style="background: transparent; justify-content: center" class="container-0 card-header">
        <div style="border: 0pt" class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <h5 style="font-weight:bold" class="card-header">To Do</h5>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit</p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Add Task +</a>
            </div>
        </div>   
        <div style="border: 0pt" class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <h5 style="font-weight:bold" class="card-title">Doing</h5>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit</p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Add Task +</a>
            </div>
        </div>  
        <div style="border: 0pt" class="item card ">
            <div class="container-1">
                <div class="item-1">
                    <h5 style="font-weight:bold" class="card-title">Done</h5>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit</p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                    <p style="padding: 10px;" class="card mini-card">Lorem ipsum dolor sit </p>
                </div>
            </div>
            <div class="container-2">
                <a href="#" class="btn btn-primary">Add Task +</a>
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
