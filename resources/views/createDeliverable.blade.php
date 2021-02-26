@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Create Deliverable for Students') }}</h1>

    <!-- Main Content goes here -->
    <div class="row">
        <div class="col-md-auto">
                <div class="dropdown" style="position: relative">
                    <button class="btn font-weight-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Modul
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">UI/UX</a>
                        <a class="dropdown-item" href="#">Backend</a>
                        <a class="dropdown-item" href="#">Frontend</a>
                        <a class="dropdown-item" href="#">Mobile</a>
                        <a class="dropdown-item" href="#">Desktop</a>
                        <a class="dropdown-item" href="#">Deployment</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="container-0">
        <div class="card" style="width: 100%">
            <div class="item-1 card-body">
                <div class="form-group focused">
                    <label class="form-control-label" for="deliverable_name">Title</label>
                    <textarea id="deliverable_name" class="form-control" name="deliverable_name" placeholder="Type something..."></textarea>
                </div>
                <div class="form-group focused">
                    <label class="form-control-label" for="description">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Type something..."></textarea>
                </div>
                <div class="form-group focused">
                    <label class="form-control-label" for="due_date">Due Date</label>
                    <div class="form-item"></div>
                    <input class="input-sm form-control" id="start-date" type="text" name="start" placeholder="Type Due Date..." data-date-format="DD, MM d"/><span class="date-text date-depart"></span>
                </div>
                
                <a href="#" class="btn btn-primary">Post</a>
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
