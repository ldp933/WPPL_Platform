@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
<<<<<<< HEAD
=======
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hotelin</li>
        <li class="breadcrumb-item active" aria-current="page">Failure Story</li>
    </ol>
    </nav>
>>>>>>> master
    <h1 class="h3 mb-4 text-gray-800">{{ __('Add Failure Story') }}</h1>

    <!-- Main Content goes here -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group focused">
                        <label class="form-control-label" for="problem">Problem</label>
<<<<<<< HEAD
                        <input type="text" id="problem" class="form-control" name="problem">
=======
                        <input type="text" id="problem" class="form-control" name="problem" placeholder="Fill the problem">
>>>>>>> master
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="description">Description</label>
<<<<<<< HEAD
                        <textarea id="description" class="form-control" name="description"></textarea>
=======
                        <textarea id="description" class="form-control" name="description" placeholder="Fill the description"></textarea>
>>>>>>> master
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group focused">
                        <label class="form-control-label" for="solution">Solution</label>
<<<<<<< HEAD
                        <textarea id="solution" class="form-control" name="solution"></textarea>
=======
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" aria-describedby="answerHelp" placeholder="Fill the solution"></textarea>
>>>>>>> master
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1">
                    <div class="form-group">
<<<<<<< HEAD
                        <button type="submit" class="btn btn-new-primary">Post</button>
                    </div>
                </div>

                <div class="col-lg-1">
=======
                        <button type="submit" class="btn btn-col">Post</button>
                    </div>
                </div>

                <div class="col-auto">
>>>>>>> master
                    <div class="form-group">
                        <button type="submit" class="btn btn-new-cancel">Cancel</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
<<<<<<< HEAD


=======
>>>>>>> master
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
